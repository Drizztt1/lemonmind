<?php

declare(strict_types=1);

namespace App\Command;

use Pimcore\Console\AbstractCommand;
use Pimcore\Model\DataObject\AbstractObject;
use Pimcore\Model\DataObject\Folder;
use Pimcore\Model\DataObject\Todos;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * @psalm-suppress all
 */
#[AsCommand(
    name: 'app:import:todos',
    description: 'Command for import todos'
)]
class TodosImportCommand extends AbstractCommand
{
    private const API_URL = 'https://jsonplaceholder.typicode.com/todos/';
    private $folderId = 0;

    public function __construct(
        private HttpClientInterface $client,
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $data = $this->getData();
        $dataCount = count($data);

        $progressBar = new ProgressBar($output, $dataCount);
        $progressBar->start();

        $this->folderId = $this->findOrCreateFolder();

        foreach ($data as $todo) {
            $this->checkIfExist($todo);

            $progressBar->advance();
        }

        $progressBar->finish();

        $output->writeln(PHP_EOL);
        $output->writeln("IMPORT END" . PHP_EOL);

        return Command::SUCCESS;
    }

    protected function getData(): array
    {
        $response = $this->client->request('GET', self::API_URL);

        if (200 !== $response->getStatusCode()) {
            throw new \Exception('Cannot do request');
        }

        return $response->toArray();
    }

    protected function findOrCreateFolder(): int
    {
        $folder = Folder::getByPath('/TodoTest');

        if (is_null($folder)) {
            $folder = new Folder();
            $folder->setParentId(1);
            $folder->setKey('Todo');
            $folder->save();
        }

        return $folder->getId();
    }


    protected function checkIfExist(array $data): void
    {
        $todos = Todos::getByTodosId(1, 1);

        if (!is_null($todos)) {
            $this->updateData($todos, $data);
        } else {
            $this->saveData($data);
        }
    }

    protected function saveData(array $data): void
    {
        $todos = new Todos();

        $todos->setParentId($this->folderId);
        $todos->setPublished(true);
        $todos->setKey($data['title']);
        $todos->setTodosId($data['id']);
        $todos->setUserId($data['userId']);
        $todos->setTitle($data['title']);
        $todos->setCompleted($data['completed']);

        $todos->save();
    }

    protected function updateData(Todos $todos, array $data): void
    {
        $todos->getData();
        $todos->setUserId($data['userId']);
        $todos->setTitle($data['title']);
        $todos->setCompleted($data['completed']);

        $todos->save();
    }

}
