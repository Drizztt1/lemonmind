<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - frequenciesId [numeric]
 * - airportRef [numeric]
 * - airportIdent [input]
 * - frequencyMhz [numeric]
 * - frequenciesType [select]
 * - description [wysiwyg]
 */

return \Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'dao' => NULL,
   'id' => 'frequencies',
   'name' => 'frequencies',
   'title' => '',
   'description' => '',
   'creationDate' => NULL,
   'modificationDate' => 1732814525,
   'userOwner' => 2,
   'userModification' => 2,
   'parentClass' => '',
   'implementsInterfaces' => '',
   'listingParentClass' => '',
   'useTraits' => '',
   'listingUseTraits' => '',
   'encryption' => false,
   'encryptedTables' =>
  array (
  ),
   'allowInherit' => false,
   'allowVariants' => false,
   'showVariants' => false,
   'layoutDefinitions' =>
  \Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'name' => 'pimcore_root',
     'type' => NULL,
     'region' => NULL,
     'title' => NULL,
     'width' => 0,
     'height' => 0,
     'collapsible' => false,
     'collapsed' => false,
     'bodyStyle' => NULL,
     'datatype' => 'layout',
     'children' =>
    array (
      0 =>
      \Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
         'name' => 'Layout',
         'type' => NULL,
         'region' => NULL,
         'title' => '',
         'width' => '',
         'height' => '',
         'collapsible' => false,
         'collapsed' => false,
         'bodyStyle' => '',
         'datatype' => 'layout',
         'children' =>
        array (
          0 =>
          \Pimcore\Model\DataObject\ClassDefinition\Layout\Region::__set_state(array(
             'name' => 'Layout',
             'type' => NULL,
             'region' => NULL,
             'title' => '',
             'width' => '',
             'height' => 200,
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'children' =>
            array (
              0 =>
              \Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                 'name' => 'Layout',
                 'type' => NULL,
                 'region' => 'west',
                 'title' => '',
                 'width' => '',
                 'height' => '',
                 'collapsible' => false,
                 'collapsed' => false,
                 'bodyStyle' => '',
                 'datatype' => 'layout',
                 'children' =>
                array (
                  0 =>
                  \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
                     'name' => 'frequenciesId',
                     'title' => 'Id',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => true,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'fieldtype' => '',
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                     'blockedVarsForExport' =>
                    array (
                    ),
                     'defaultValue' => NULL,
                     'integer' => false,
                     'unsigned' => false,
                     'minValue' => NULL,
                     'maxValue' => NULL,
                     'unique' => true,
                     'decimalSize' => NULL,
                     'decimalPrecision' => NULL,
                     'width' => '',
                     'defaultValueGenerator' => '',
                  )),
                  1 =>
                  \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
                     'name' => 'airportRef',
                     'title' => 'Airport ref',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => true,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'fieldtype' => '',
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                     'blockedVarsForExport' =>
                    array (
                    ),
                     'defaultValue' => NULL,
                     'integer' => true,
                     'unsigned' => false,
                     'minValue' => NULL,
                     'maxValue' => NULL,
                     'unique' => false,
                     'decimalSize' => NULL,
                     'decimalPrecision' => NULL,
                     'width' => '',
                     'defaultValueGenerator' => '',
                  )),
                  2 =>
                  \Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                     'name' => 'airportIdent',
                     'title' => 'Airport _ident',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => true,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'fieldtype' => '',
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                     'blockedVarsForExport' =>
                    array (
                    ),
                     'defaultValue' => NULL,
                     'columnLength' => 190,
                     'regex' => '',
                     'regexFlags' =>
                    array (
                    ),
                     'unique' => false,
                     'showCharCount' => false,
                     'width' => 175,
                     'defaultValueGenerator' => '',
                  )),
                ),
                 'locked' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'fieldtype' => 'panel',
                 'layout' => NULL,
                 'border' => false,
                 'icon' => '',
                 'labelWidth' => 100,
                 'labelAlign' => 'left',
              )),
              1 =>
              \Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                 'name' => 'Layout',
                 'type' => NULL,
                 'region' => 'west',
                 'title' => '',
                 'width' => '',
                 'height' => '',
                 'collapsible' => false,
                 'collapsed' => false,
                 'bodyStyle' => '',
                 'datatype' => 'layout',
                 'children' =>
                array (
                  0 =>
                  \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
                     'name' => 'frequencyMhz',
                     'title' => 'Frequency mhz',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => false,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'fieldtype' => '',
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                     'blockedVarsForExport' =>
                    array (
                    ),
                     'defaultValue' => NULL,
                     'integer' => false,
                     'unsigned' => false,
                     'minValue' => NULL,
                     'maxValue' => NULL,
                     'unique' => false,
                     'decimalSize' => NULL,
                     'decimalPrecision' => 3,
                     'width' => 250,
                     'defaultValueGenerator' => '',
                  )),
                  1 =>
                  \Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
                     'name' => 'frequenciesType',
                     'title' => 'Type',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => false,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'fieldtype' => '',
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                     'blockedVarsForExport' =>
                    array (
                    ),
                     'options' =>
                    array (
                      0 =>
                      array (
                        'key' => 'CTAF',
                        'value' => 'CTAF',
                      ),
                      1 =>
                      array (
                        'key' => 'ARCAL',
                        'value' => 'ARCAL',
                      ),
                      2 =>
                      array (
                        'key' => 'UNIC',
                        'value' => 'UNIC',
                      ),
                      3 =>
                      array (
                        'key' => 'APP',
                        'value' => 'APP',
                      ),
                      4 =>
                      array (
                        'key' => 'GND',
                        'value' => 'GND',
                      ),
                      5 =>
                      array (
                        'key' => 'TWR',
                        'value' => 'TWR',
                      ),
                      6 =>
                      array (
                        'key' => 'CNTR',
                        'value' => 'CNTR',
                      ),
                      7 =>
                      array (
                        'key' => 'ARTC',
                        'value' => 'ARTC',
                      ),
                      8 =>
                      array (
                        'key' => 'MISC',
                        'value' => 'MISC',
                      ),
                      9 =>
                      array (
                        'key' => 'A/D',
                        'value' => 'A/D',
                      ),
                      10 =>
                      array (
                        'key' => 'MULT',
                        'value' => 'MULT',
                      ),
                      11 =>
                      array (
                        'key' => 'A/G',
                        'value' => 'A/G',
                      ),
                      12 =>
                      array (
                        'key' => 'ATIS',
                        'value' => 'ATIS',
                      ),
                      13 =>
                      array (
                        'key' => 'INFO',
                        'value' => 'INFO',
                      ),
                      14 =>
                      array (
                        'key' => 'OPS',
                        'value' => 'OPS',
                      ),
                      15 =>
                      array (
                        'key' => 'PMSV',
                        'value' => 'PMSV',
                      ),
                      16 =>
                      array (
                        'key' => 'APP/DEP',
                        'value' => 'APP/DEP',
                      ),
                      17 =>
                      array (
                        'key' => 'TFC',
                        'value' => 'TFC',
                      ),
                      18 =>
                      array (
                        'key' => 'AWOS',
                        'value' => 'AWOS',
                      ),
                      19 =>
                      array (
                        'key' => 'UNICOM',
                        'value' => 'UNICOM',
                      ),
                      20 =>
                      array (
                        'key' => 'FSS',
                        'value' => 'FSS',
                      ),
                      21 =>
                      array (
                        'key' => 'RDO',
                        'value' => 'RDO',
                      ),
                      22 =>
                      array (
                        'key' => 'CLD',
                        'value' => 'CLD',
                      ),
                      23 =>
                      array (
                        'key' => 'Private',
                        'value' => 'Private',
                      ),
                      24 =>
                      array (
                        'key' => 'AFIS',
                        'value' => 'AFIS',
                      ),
                      25 =>
                      array (
                        'key' => 'COM',
                        'value' => 'COM',
                      ),
                      26 =>
                      array (
                        'key' => 'Non controlled',
                        'value' => 'Non controlled',
                      ),
                      27 =>
                      array (
                        'key' => 'FIA',
                        'value' => 'FIA',
                      ),
                      28 =>
                      array (
                        'key' => 'Ciljuge Info',
                        'value' => 'Ciljuge Info',
                      ),
                      29 =>
                      array (
                        'key' => 'HIS',
                        'value' => 'HIS',
                      ),
                      30 =>
                      array (
                        'key' => 'ATS',
                        'value' => 'ATS',
                      ),
                      31 =>
                      array (
                        'key' => 'ACC',
                        'value' => 'ACC',
                      ),
                      32 =>
                      array (
                        'key' => 'RDR',
                        'value' => 'RDR',
                      ),
                      33 =>
                      array (
                        'key' => 'DEP',
                        'value' => 'DEP',
                      ),
                      34 =>
                      array (
                        'key' => 'TWR: BIRK',
                        'value' => 'TWR: BIRK',
                      ),
                      35 =>
                      array (
                        'key' => 'TRFC',
                        'value' => 'TRFC',
                      ),
                      36 =>
                      array (
                        'key' => 'RMP',
                        'value' => 'RMP',
                      ),
                      37 =>
                      array (
                        'key' => 'ATF',
                        'value' => 'ATF',
                      ),
                      38 =>
                      array (
                        'key' => 'VFR Advisory',
                        'value' => 'VFR Advisory',
                      ),
                      39 =>
                      array (
                        'key' => 'MF',
                        'value' => 'MF',
                      ),
                      40 =>
                      array (
                        'key' => 'CPR1',
                        'value' => 'CPR1',
                      ),
                      41 =>
                      array (
                        'key' => 'Ground',
                        'value' => 'Ground',
                      ),
                      42 =>
                      array (
                        'key' => 'UNICOM/ATF',
                        'value' => 'UNICOM/ATF',
                      ),
                      43 =>
                      array (
                        'key' => 'AAS',
                        'value' => 'AAS',
                      ),
                      44 =>
                      array (
                        'key' => 'RCO',
                        'value' => 'RCO',
                      ),
                      45 =>
                      array (
                        'key' => 'CTAF(R)',
                        'value' => 'CTAF(R)',
                      ),
                      46 =>
                      array (
                        'key' => 'Departures',
                        'value' => 'Departures',
                      ),
                      47 =>
                      array (
                        'key' => 'MIL',
                        'value' => 'MIL',
                      ),
                      48 =>
                      array (
                        'key' => 'ARR/DEP',
                        'value' => 'ARR/DEP',
                      ),
                      49 =>
                      array (
                        'key' => 'CLNC DEL',
                        'value' => 'CLNC DEL',
                      ),
                      50 =>
                      array (
                        'key' => 'UNICOM ltd hrs O',
                        'value' => 'UNICOM ltd hrs O',
                      ),
                      51 =>
                      array (
                        'key' => 'TOWER',
                        'value' => 'TOWER',
                      ),
                      52 =>
                      array (
                        'key' => 'TCA',
                        'value' => 'TCA',
                      ),
                      53 =>
                      array (
                        'key' => 'ASOS',
                        'value' => 'ASOS',
                      ),
                      54 =>
                      array (
                        'key' => 'Ambulance Dispat',
                        'value' => 'Ambulance Dispat',
                      ),
                      55 =>
                      array (
                        'key' => 'Advisory',
                        'value' => 'Advisory',
                      ),
                      56 =>
                      array (
                        'key' => 'Gliding',
                        'value' => 'Gliding',
                      ),
                      57 =>
                      array (
                        'key' => 'Vhf',
                        'value' => 'Vhf',
                      ),
                      58 =>
                      array (
                        'key' => 'ARR',
                        'value' => 'ARR',
                      ),
                      59 =>
                      array (
                        'key' => 'RADIO',
                        'value' => 'RADIO',
                      ),
                      60 =>
                      array (
                        'key' => 'PAL',
                        'value' => 'PAL',
                      ),
                      61 =>
                      array (
                        'key' => 'VDF',
                        'value' => 'VDF',
                      ),
                      62 =>
                      array (
                        'key' => 'APRON ADV',
                        'value' => 'APRON ADV',
                      ),
                      63 =>
                      array (
                        'key' => 'INTL AIR',
                        'value' => 'INTL AIR',
                      ),
                      64 =>
                      array (
                        'key' => 'PVT ADV',
                        'value' => 'PVT ADV',
                      ),
                      65 =>
                      array (
                        'key' => 'EMR',
                        'value' => 'EMR',
                      ),
                      66 =>
                      array (
                        'key' => 'TML',
                        'value' => 'TML',
                      ),
                      67 =>
                      array (
                        'key' => 'LWIS',
                        'value' => 'LWIS',
                      ),
                      68 =>
                      array (
                        'key' => 'MF/RDO',
                        'value' => 'MF/RDO',
                      ),
                      69 =>
                      array (
                        'key' => 'RCO. Bcst',
                        'value' => 'RCO. Bcst',
                      ),
                      70 =>
                      array (
                        'key' => 'APRON',
                        'value' => 'APRON',
                      ),
                      71 =>
                      array (
                        'key' => 'VFR ADV',
                        'value' => 'VFR ADV',
                      ),
                      72 =>
                      array (
                        'key' => 'APRT RDO',
                        'value' => 'APRT RDO',
                      ),
                      73 =>
                      array (
                        'key' => 'FBO',
                        'value' => 'FBO',
                      ),
                      74 =>
                      array (
                        'key' => 'PAD',
                        'value' => 'PAD',
                      ),
                      75 =>
                      array (
                        'key' => 'CCR',
                        'value' => 'CCR',
                      ),
                      76 =>
                      array (
                        'key' => 'Melbourne Centre',
                        'value' => 'Melbourne Centre',
                      ),
                      77 =>
                      array (
                        'key' => 'FIS',
                        'value' => 'FIS',
                      ),
                      78 =>
                      array (
                        'key' => 'Dolmar INFO',
                        'value' => 'Dolmar INFO',
                      ),
                      79 =>
                      array (
                        'key' => '8.33',
                        'value' => '8.33',
                      ),
                      80 =>
                      array (
                        'key' => 'Gössenheim INFO',
                        'value' => 'Gössenheim INFO',
                      ),
                      81 =>
                      array (
                        'key' => 'DIR',
                        'value' => 'DIR',
                      ),
                      82 =>
                      array (
                        'key' => '131.7',
                        'value' => '131.7',
                      ),
                      83 =>
                      array (
                        'key' => 'SAB - VOR',
                        'value' => 'SAB - VOR',
                      ),
                      84 =>
                      array (
                        'key' => 'ENG VOR',
                        'value' => 'ENG VOR',
                      ),
                      85 =>
                      array (
                        'key' => 'ILS - IEN',
                        'value' => 'ILS - IEN',
                      ),
                      86 =>
                      array (
                        'key' => 'GCA',
                        'value' => 'GCA',
                      ),
                      87 =>
                      array (
                        'key' => 'PTD',
                        'value' => 'PTD',
                      ),
                      88 =>
                      array (
                        'key' => 'GE',
                        'value' => 'GE',
                      ),
                      89 =>
                      array (
                        'key' => 'POST',
                        'value' => 'POST',
                      ),
                      90 =>
                      array (
                        'key' => 'EDFG',
                        'value' => 'EDFG',
                      ),
                      91 =>
                      array (
                        'key' => 'TOWER / INFO',
                        'value' => 'TOWER / INFO',
                      ),
                      92 =>
                      array (
                        'key' => 'Tower / Info:',
                        'value' => 'Tower / Info:',
                      ),
                      93 =>
                      array (
                        'key' => 'INFO (8',
                        'value' => '33khz)',
                      ),
                      94 =>
                      array (
                        'key' => 'AFIS non-certifi',
                        'value' => 'AFIS non-certifi',
                      ),
                      95 =>
                      array (
                        'key' => 'Thannhausen Info',
                        'value' => 'Thannhausen Info',
                      ),
                      96 =>
                      array (
                        'key' => 'INFORMATION',
                        'value' => 'INFORMATION',
                      ),
                      97 =>
                      array (
                        'key' => 'RADAR',
                        'value' => 'RADAR',
                      ),
                      98 =>
                      array (
                        'key' => 'ACC Sector',
                        'value' => 'ACC Sector',
                      ),
                      99 =>
                      array (
                        'key' => 'DEL',
                        'value' => 'DEL',
                      ),
                      100 =>
                      array (
                        'key' => 'ILS 17',
                        'value' => 'ILS 17',
                      ),
                      101 =>
                      array (
                        'key' => 'ILS 25',
                        'value' => 'ILS 25',
                      ),
                      102 =>
                      array (
                        'key' => 'Fire',
                        'value' => 'Fire',
                      ),
                      103 =>
                      array (
                        'key' => 'RAD/APP',
                        'value' => 'RAD/APP',
                      ),
                      104 =>
                      array (
                        'key' => 'ILS',
                        'value' => 'ILS',
                      ),
                      105 =>
                      array (
                        'key' => 'Nationwide Glide',
                        'value' => 'Nationwide Glide',
                      ),
                      106 =>
                      array (
                        'key' => 'CAC',
                        'value' => 'CAC',
                      ),
                      107 =>
                      array (
                        'key' => 'LARS',
                        'value' => 'LARS',
                      ),
                      108 =>
                      array (
                        'key' => 'Brimpton radio',
                        'value' => 'Brimpton radio',
                      ),
                      109 =>
                      array (
                        'key' => 'APP/RAD',
                        'value' => 'APP/RAD',
                      ),
                      110 =>
                      array (
                        'key' => 'ILS Rw 32/14',
                        'value' => 'ILS Rw 32/14',
                      ),
                      111 =>
                      array (
                        'key' => 'RAD',
                        'value' => 'RAD',
                      ),
                      112 =>
                      array (
                        'key' => 'Fire service',
                        'value' => 'Fire service',
                      ),
                      113 =>
                      array (
                        'key' => 'everything',
                        'value' => 'everything',
                      ),
                      114 =>
                      array (
                        'key' => 'HAN',
                        'value' => 'HAN',
                      ),
                      115 =>
                      array (
                        'key' => 'APP vhf',
                        'value' => 'APP vhf',
                      ),
                      116 =>
                      array (
                        'key' => 'Director',
                        'value' => 'Director',
                      ),
                      117 =>
                      array (
                        'key' => 'GRN',
                        'value' => 'GRN',
                      ),
                      118 =>
                      array (
                        'key' => 'Zone / CAC',
                        'value' => 'Zone / CAC',
                      ),
                      119 =>
                      array (
                        'key' => 'TWR 1',
                        'value' => 'TWR 1',
                      ),
                      120 =>
                      array (
                        'key' => 'TWR 2',
                        'value' => 'TWR 2',
                      ),
                      121 =>
                      array (
                        'key' => 'ZONE',
                        'value' => 'ZONE',
                      ),
                      122 =>
                      array (
                        'key' => 'PAR',
                        'value' => 'PAR',
                      ),
                      123 =>
                      array (
                        'key' => 'CENTER',
                        'value' => 'CENTER',
                      ),
                      124 =>
                      array (
                        'key' => 'GCD',
                        'value' => 'GCD',
                      ),
                      125 =>
                      array (
                        'key' => 'GND/CDL',
                        'value' => 'GND/CDL',
                      ),
                      126 =>
                      array (
                        'key' => 'Dutch mil',
                        'value' => 'Dutch mil',
                      ),
                      127 =>
                      array (
                        'key' => 'APP/TWR',
                        'value' => 'APP/TWR',
                      ),
                      128 =>
                      array (
                        'key' => 'radio frequency',
                        'value' => 'radio frequency',
                      ),
                      129 =>
                      array (
                        'key' => '-',
                        'value' => '-',
                      ),
                      130 =>
                      array (
                        'key' => 'GCCD',
                        'value' => 'GCCD',
                      ),
                      131 =>
                      array (
                        'key' => 'FIS POZNAŃ INFO',
                        'value' => 'FIS POZNAŃ INFO',
                      ),
                      132 =>
                      array (
                        'key' => 'auto informacion',
                        'value' => 'auto informacion',
                      ),
                      133 =>
                      array (
                        'key' => 'GENERAL',
                        'value' => 'GENERAL',
                      ),
                      134 =>
                      array (
                        'key' => 'Area control',
                        'value' => 'Area control',
                      ),
                      135 =>
                      array (
                        'key' => 'Club.',
                        'value' => 'Club.',
                      ),
                      136 =>
                      array (
                        'key' => 'Oskarshamn Airpo',
                        'value' => 'Oskarshamn Airpo',
                      ),
                      137 =>
                      array (
                        'key' => 'INF',
                        'value' => 'INF',
                      ),
                      138 =>
                      array (
                        'key' => 'Vängsö Radio',
                        'value' => 'Vängsö Radio',
                      ),
                      139 =>
                      array (
                        'key' => 'local airport(li',
                        'value' => 'local airport(li',
                      ),
                      140 =>
                      array (
                        'key' => 'Silute',
                        'value' => 'Silute',
                      ),
                      141 =>
                      array (
                        'key' => 'Paluknys radio',
                        'value' => 'Paluknys radio',
                      ),
                      142 =>
                      array (
                        'key' => 'Vilnius ATIS',
                        'value' => 'Vilnius ATIS',
                      ),
                      143 =>
                      array (
                        'key' => 'Vilnius Info',
                        'value' => 'Vilnius Info',
                      ),
                      144 =>
                      array (
                        'key' => 'AC',
                        'value' => 'AC',
                      ),
                      145 =>
                      array (
                        'key' => 'GTE',
                        'value' => 'GTE',
                      ),
                      146 =>
                      array (
                        'key' => 'D200',
                        'value' => 'D200',
                      ),
                      147 =>
                      array (
                        'key' => 'PA GF',
                        'value' => 'PA GF',
                      ),
                      148 =>
                      array (
                        'key' => 'Special rules ap',
                        'value' => 'Special rules ap',
                      ),
                      149 =>
                      array (
                        'key' => 'DURBAN Approach',
                        'value' => 'DURBAN Approach',
                      ),
                      150 =>
                      array (
                        'key' => 'KING SHAKA ATIS',
                        'value' => 'KING SHAKA ATIS',
                      ),
                      151 =>
                      array (
                        'key' => 'KING SHAKA INT.',
                        'value' => 'KING SHAKA INT.',
                      ),
                      152 =>
                      array (
                        'key' => 'VOT 	TGV',
                        'value' => 'VOT 	TGV',
                      ),
                      153 =>
                      array (
                        'key' => 'Unmanned',
                        'value' => 'Unmanned',
                      ),
                      154 =>
                      array (
                        'key' => 'Lowvelt Military',
                        'value' => 'Lowvelt Military',
                      ),
                      155 =>
                      array (
                        'key' => 'AFIS-TOWER',
                        'value' => 'AFIS-TOWER',
                      ),
                      156 =>
                      array (
                        'key' => 'FLKS',
                        'value' => 'FLKS',
                      ),
                      157 =>
                      array (
                        'key' => 'NDOLA TWR',
                        'value' => 'NDOLA TWR',
                      ),
                      158 =>
                      array (
                        'key' => 'CTR',
                        'value' => 'CTR',
                      ),
                      159 =>
                      array (
                        'key' => 'A/A',
                        'value' => 'A/A',
                      ),
                      160 =>
                      array (
                        'key' => 'Auto Information',
                        'value' => 'Auto Information',
                      ),
                      161 =>
                      array (
                        'key' => 'AIS',
                        'value' => 'AIS',
                      ),
                      162 =>
                      array (
                        'key' => 'safetycom',
                        'value' => 'safetycom',
                      ),
                      163 =>
                      array (
                        'key' => 'Safety Comm',
                        'value' => 'Safety Comm',
                      ),
                      164 =>
                      array (
                        'key' => 'DAAIS',
                        'value' => 'DAAIS',
                      ),
                      165 =>
                      array (
                        'key' => 'Safety com',
                        'value' => 'Safety com',
                      ),
                      166 =>
                      array (
                        'key' => 'DLV',
                        'value' => 'DLV',
                      ),
                      167 =>
                      array (
                        'key' => 'GMMD',
                        'value' => 'GMMD',
                      ),
                      168 =>
                      array (
                        'key' => 'TWR GRND',
                        'value' => 'TWR GRND',
                      ),
                      169 =>
                      array (
                        'key' => 'ATIS (en)',
                        'value' => 'ATIS (en)',
                      ),
                      170 =>
                      array (
                        'key' => 'ATIS (fr)',
                        'value' => 'ATIS (fr)',
                      ),
                      171 =>
                      array (
                        'key' => 'SMC',
                        'value' => 'SMC',
                      ),
                      172 =>
                      array (
                        'key' => 'East',
                        'value' => 'East',
                      ),
                      173 =>
                      array (
                        'key' => 'West',
                        'value' => 'West',
                      ),
                      174 =>
                      array (
                        'key' => 'APPROACH / TOWER',
                        'value' => 'APPROACH / TOWER',
                      ),
                      175 =>
                      array (
                        'key' => 'HF/S.S.B.  Altn.',
                        'value' => 'HF/S.S.B.  Altn.',
                      ),
                      176 =>
                      array (
                        'key' => 'RDO  HF/S.S.B',
                        'value' => 'RDO  HF/S.S.B',
                      ),
                      177 =>
                      array (
                        'key' => 'PFLT',
                        'value' => 'PFLT',
                      ),
                      178 =>
                      array (
                        'key' => 'Volmet',
                        'value' => 'Volmet',
                      ),
                      179 =>
                      array (
                        'key' => 'HF',
                        'value' => 'HF',
                      ),
                      180 =>
                      array (
                        'key' => 'Air to Air Local',
                        'value' => 'Air to Air Local',
                      ),
                      181 =>
                      array (
                        'key' => 'Tropic Air Ops',
                        'value' => 'Tropic Air Ops',
                      ),
                      182 =>
                      array (
                        'key' => 'CONTROL',
                        'value' => 'CONTROL',
                      ),
                      183 =>
                      array (
                        'key' => 'TWR/APP',
                        'value' => 'TWR/APP',
                      ),
                      184 =>
                      array (
                        'key' => 'North Area',
                        'value' => 'North Area',
                      ),
                      185 =>
                      array (
                        'key' => 'South Area',
                        'value' => 'South Area',
                      ),
                      186 =>
                      array (
                        'key' => 'EBB',
                        'value' => 'EBB',
                      ),
                      187 =>
                      array (
                        'key' => 'ATC',
                        'value' => 'ATC',
                      ),
                      188 =>
                      array (
                        'key' => 'DAY VFR FLIGHTS',
                        'value' => 'DAY VFR FLIGHTS',
                      ),
                      189 =>
                      array (
                        'key' => 'APPR',
                        'value' => 'APPR',
                      ),
                      190 =>
                      array (
                        'key' => 'CTRL',
                        'value' => 'CTRL',
                      ),
                      191 =>
                      array (
                        'key' => 'NDB',
                        'value' => 'NDB',
                      ),
                      192 =>
                      array (
                        'key' => 'PRIVATE JSPL',
                        'value' => 'PRIVATE JSPL',
                      ),
                      193 =>
                      array (
                        'key' => 'Dhule',
                        'value' => 'Dhule',
                      ),
                      194 =>
                      array (
                        'key' => 'SKYNEX AERO',
                        'value' => 'SKYNEX AERO',
                      ),
                      195 =>
                      array (
                        'key' => 'apr',
                        'value' => 'apr',
                      ),
                      196 =>
                      array (
                        'key' => 'APROAC',
                        'value' => 'APROAC',
                      ),
                      197 =>
                      array (
                        'key' => 'BIGA',
                        'value' => 'BIGA',
                      ),
                      198 =>
                      array (
                        'key' => 'AWOS-3P',
                        'value' => 'AWOS-3P',
                      ),
                      199 =>
                      array (
                        'key' => 'CTAF/UNICOM',
                        'value' => 'CTAF/UNICOM',
                      ),
                      200 =>
                      array (
                        'key' => 'GCO',
                        'value' => 'GCO',
                      ),
                      201 =>
                      array (
                        'key' => 'FCC',
                        'value' => 'FCC',
                      ),
                      202 =>
                      array (
                        'key' => 'SFA',
                        'value' => 'SFA',
                      ),
                      203 =>
                      array (
                        'key' => 'ACP',
                        'value' => 'ACP',
                      ),
                      204 =>
                      array (
                        'key' => 'CTAF/UNICOM:',
                        'value' => 'CTAF/UNICOM:',
                      ),
                      205 =>
                      array (
                        'key' => 'CLSB',
                        'value' => 'CLSB',
                      ),
                      206 =>
                      array (
                        'key' => 'EMERG',
                        'value' => 'EMERG',
                      ),
                      207 =>
                      array (
                        'key' => 'STAR',
                        'value' => 'STAR',
                      ),
                      208 =>
                      array (
                        'key' => 'WXAS',
                        'value' => 'WXAS',
                      ),
                      209 =>
                      array (
                        'key' => 'CLRD',
                        'value' => 'CLRD',
                      ),
                      210 =>
                      array (
                        'key' => 'TOWER/CTAF',
                        'value' => 'TOWER/CTAF',
                      ),
                      211 =>
                      array (
                        'key' => 'ATIS/AWOS',
                        'value' => 'ATIS/AWOS',
                      ),
                      212 =>
                      array (
                        'key' => 'ILS RWY14',
                        'value' => 'ILS RWY14',
                      ),
                      213 =>
                      array (
                        'key' => 'HARE',
                        'value' => 'HARE',
                      ),
                      214 =>
                      array (
                        'key' => 'APP (E)',
                        'value' => 'APP (E)',
                      ),
                      215 =>
                      array (
                        'key' => 'APP (W)',
                        'value' => 'APP (W)',
                      ),
                      216 =>
                      array (
                        'key' => 'DEP (E)',
                        'value' => 'DEP (E)',
                      ),
                      217 =>
                      array (
                        'key' => 'DEP (W)',
                        'value' => 'DEP (W)',
                      ),
                      218 =>
                      array (
                        'key' => 'RFSS',
                        'value' => 'RFSS',
                      ),
                      219 =>
                      array (
                        'key' => 'AWOS-3',
                        'value' => 'AWOS-3',
                      ),
                      220 =>
                      array (
                        'key' => 'HEL',
                        'value' => 'HEL',
                      ),
                      221 =>
                      array (
                        'key' => 'WHIDBEY  APP/DEP',
                        'value' => 'WHIDBEY  APP/DEP',
                      ),
                      222 =>
                      array (
                        'key' => 'APP/DEP Backup',
                        'value' => 'APP/DEP Backup',
                      ),
                      223 =>
                      array (
                        'key' => 'APP/DEP Backup2',
                        'value' => 'APP/DEP Backup2',
                      ),
                      224 =>
                      array (
                        'key' => 'TWR2',
                        'value' => 'TWR2',
                      ),
                      225 =>
                      array (
                        'key' => 'D-ATIS',
                        'value' => 'D-ATIS',
                      ),
                      226 =>
                      array (
                        'key' => 'C/D',
                        'value' => 'C/D',
                      ),
                      227 =>
                      array (
                        'key' => 'COMD POST',
                        'value' => 'COMD POST',
                      ),
                      228 =>
                      array (
                        'key' => 'LECH_TWR',
                        'value' => 'LECH_TWR',
                      ),
                      229 =>
                      array (
                        'key' => 'LEVC_N_TACC',
                        'value' => 'LEVC_N_TACC',
                      ),
                      230 =>
                      array (
                        'key' => 'Approach',
                        'value' => 'Approach',
                      ),
                      231 =>
                      array (
                        'key' => 'BAA Company Freq',
                        'value' => 'BAA Company Freq',
                      ),
                      232 =>
                      array (
                        'key' => 'LEHC_AFIS',
                        'value' => 'LEHC_AFIS',
                      ),
                      233 =>
                      array (
                        'key' => 'LEZG_APP',
                        'value' => 'LEZG_APP',
                      ),
                      234 =>
                      array (
                        'key' => 'Air/Air',
                        'value' => 'Air/Air',
                      ),
                      235 =>
                      array (
                        'key' => 'ACBS',
                        'value' => 'ACBS',
                      ),
                      236 =>
                      array (
                        'key' => 'GMC',
                        'value' => 'GMC',
                      ),
                      237 =>
                      array (
                        'key' => 'ATIS DEP',
                        'value' => 'ATIS DEP',
                      ),
                      238 =>
                      array (
                        'key' => 'LERE_RADIO',
                        'value' => 'LERE_RADIO',
                      ),
                      239 =>
                      array (
                        'key' => 'RF',
                        'value' => 'RF',
                      ),
                      240 =>
                      array (
                        'key' => 'LESU A/A',
                        'value' => 'LESU A/A',
                      ),
                      241 =>
                      array (
                        'key' => 'LESU_AFIS',
                        'value' => 'LESU_AFIS',
                      ),
                      242 =>
                      array (
                        'key' => 'SIV',
                        'value' => 'SIV',
                      ),
                      243 =>
                      array (
                        'key' => 'AUTO INFO',
                        'value' => 'AUTO INFO',
                      ),
                      244 =>
                      array (
                        'key' => 'Auto-Info',
                        'value' => 'Auto-Info',
                      ),
                      245 =>
                      array (
                        'key' => 'AutoInfo',
                        'value' => 'AutoInfo',
                      ),
                      246 =>
                      array (
                        'key' => 'Orange French AF',
                        'value' => 'Orange French AF',
                      ),
                      247 =>
                      array (
                        'key' => 'Sisteron',
                        'value' => 'Sisteron',
                      ),
                      248 =>
                      array (
                        'key' => 'ATIS/V',
                        'value' => 'ATIS/V',
                      ),
                      249 =>
                      array (
                        'key' => 'TWR/AFIS',
                        'value' => 'TWR/AFIS',
                      ),
                      250 =>
                      array (
                        'key' => 'ARSA',
                        'value' => 'ARSA',
                      ),
                      251 =>
                      array (
                        'key' => 'SAR',
                        'value' => 'SAR',
                      ),
                      252 =>
                      array (
                        'key' => 'TRSA',
                        'value' => 'TRSA',
                      ),
                      253 =>
                      array (
                        'key' => 'APRS',
                        'value' => 'APRS',
                      ),
                      254 =>
                      array (
                        'key' => 'APRW',
                        'value' => 'APRW',
                      ),
                      255 =>
                      array (
                        'key' => 'CDC',
                        'value' => 'CDC',
                      ),
                      256 =>
                      array (
                        'key' => 'PPR-request',
                        'value' => 'PPR-request',
                      ),
                      257 =>
                      array (
                        'key' => 'TACAN',
                        'value' => 'TACAN',
                      ),
                      258 =>
                      array (
                        'key' => 'VORTAC',
                        'value' => 'VORTAC',
                      ),
                      259 =>
                      array (
                        'key' => 'ILS RWY 32',
                        'value' => 'ILS RWY 32',
                      ),
                      260 =>
                      array (
                        'key' => 'Pavullo Radio',
                        'value' => 'Pavullo Radio',
                      ),
                      261 =>
                      array (
                        'key' => 'Valbrembo Radio',
                        'value' => 'Valbrembo Radio',
                      ),
                      262 =>
                      array (
                        'key' => 'APP EAST',
                        'value' => 'APP EAST',
                      ),
                      263 =>
                      array (
                        'key' => 'APP WEST',
                        'value' => 'APP WEST',
                      ),
                      264 =>
                      array (
                        'key' => 'APP WEST D',
                        'value' => 'APP WEST D',
                      ),
                      265 =>
                      array (
                        'key' => 'TWR D',
                        'value' => 'TWR D',
                      ),
                      266 =>
                      array (
                        'key' => 'HANDLING & GA',
                        'value' => 'HANDLING & GA',
                      ),
                      267 =>
                      array (
                        'key' => 'Bubovice RADIO',
                        'value' => 'Bubovice RADIO',
                      ),
                      268 =>
                      array (
                        'key' => 'MTWR',
                        'value' => 'MTWR',
                      ),
                      269 =>
                      array (
                        'key' => 'Tower Primary',
                        'value' => 'Tower Primary',
                      ),
                      270 =>
                      array (
                        'key' => 'Tower Secondary',
                        'value' => 'Tower Secondary',
                      ),
                      271 =>
                      array (
                        'key' => 'Distance Radar',
                        'value' => 'Distance Radar',
                      ),
                      272 =>
                      array (
                        'key' => 'Leaving',
                        'value' => 'Leaving',
                      ),
                      273 =>
                      array (
                        'key' => 'Runway',
                        'value' => 'Runway',
                      ),
                      274 =>
                      array (
                        'key' => 'Weather',
                        'value' => 'Weather',
                      ),
                      275 =>
                      array (
                        'key' => 'GND Crew',
                        'value' => 'GND Crew',
                      ),
                      276 =>
                      array (
                        'key' => 'OVAR TWR',
                        'value' => 'OVAR TWR',
                      ),
                      277 =>
                      array (
                        'key' => 'CLR DLVR',
                        'value' => 'CLR DLVR',
                      ),
                      278 =>
                      array (
                        'key' => 'START',
                        'value' => 'START',
                      ),
                      279 =>
                      array (
                        'key' => 'TWR ALTN',
                        'value' => 'TWR ALTN',
                      ),
                      280 =>
                      array (
                        'key' => 'lrpv',
                        'value' => 'lrpv',
                      ),
                      281 =>
                      array (
                        'key' => 'APCH',
                        'value' => 'APCH',
                      ),
                      282 =>
                      array (
                        'key' => 'GLD',
                        'value' => 'GLD',
                      ),
                      283 =>
                      array (
                        'key' => 'Air to Air',
                        'value' => 'Air to Air',
                      ),
                      284 =>
                      array (
                        'key' => 'ARR ALPNACH',
                        'value' => 'ARR ALPNACH',
                      ),
                      285 =>
                      array (
                        'key' => 'ARR EMMEN',
                        'value' => 'ARR EMMEN',
                      ),
                      286 =>
                      array (
                        'key' => 'AD',
                        'value' => 'AD',
                      ),
                      287 =>
                      array (
                        'key' => 'Aerodrome',
                        'value' => 'Aerodrome',
                      ),
                      288 =>
                      array (
                        'key' => 'New frequeny (8.',
                        'value' => 'New frequeny (8.',
                      ),
                      289 =>
                      array (
                        'key' => 'TAFR',
                        'value' => 'TAFR',
                      ),
                      290 =>
                      array (
                        'key' => 'HAVAS',
                        'value' => 'HAVAS',
                      ),
                      291 =>
                      array (
                        'key' => 'Clearance',
                        'value' => 'Clearance',
                      ),
                      292 =>
                      array (
                        'key' => 'INFO STENKOVEC',
                        'value' => 'INFO STENKOVEC',
                      ),
                      293 =>
                      array (
                        'key' => 'TWR/APP ALTN',
                        'value' => 'TWR/APP ALTN',
                      ),
                      294 =>
                      array (
                        'key' => 'Subotica RADIO',
                        'value' => 'Subotica RADIO',
                      ),
                      295 =>
                      array (
                        'key' => '126.5',
                        'value' => '126.5',
                      ),
                      296 =>
                      array (
                        'key' => 'VOR-DME',
                        'value' => 'VOR-DME',
                      ),
                      297 =>
                      array (
                        'key' => 'TWR North',
                        'value' => 'TWR North',
                      ),
                      298 =>
                      array (
                        'key' => 'TWR S',
                        'value' => 'TWR S',
                      ),
                      299 =>
                      array (
                        'key' => '122.8 unicom',
                        'value' => '122.8 unicom',
                      ),
                      300 =>
                      array (
                        'key' => 'NLF',
                        'value' => 'NLF',
                      ),
                      301 =>
                      array (
                        'key' => '123.5',
                        'value' => '123.5',
                      ),
                      302 =>
                      array (
                        'key' => 'SUPP',
                        'value' => 'SUPP',
                      ),
                      303 =>
                      array (
                        'key' => 'AWIB',
                        'value' => 'AWIB',
                      ),
                      304 =>
                      array (
                        'key' => 'CTAF (MBZ)',
                        'value' => 'CTAF (MBZ)',
                      ),
                      305 =>
                      array (
                        'key' => 'Delivery',
                        'value' => 'Delivery',
                      ),
                      306 =>
                      array (
                        'key' => 'Unattended',
                        'value' => 'Unattended',
                      ),
                      307 =>
                      array (
                        'key' => 'CTAF (CFZ)',
                        'value' => 'CTAF (CFZ)',
                      ),
                      308 =>
                      array (
                        'key' => 'MBZ',
                        'value' => 'MBZ',
                      ),
                      309 =>
                      array (
                        'key' => 'CFZ',
                        'value' => 'CFZ',
                      ),
                      310 =>
                      array (
                        'key' => 'Mhz',
                        'value' => 'Mhz',
                      ),
                      311 =>
                      array (
                        'key' => 'Manual',
                        'value' => 'Manual',
                      ),
                      312 =>
                      array (
                        'key' => 'TIBA',
                        'value' => 'TIBA',
                      ),
                      313 =>
                      array (
                        'key' => 'ATC backup',
                        'value' => 'ATC backup',
                      ),
                      314 =>
                      array (
                        'key' => 'Ground to Ground',
                        'value' => 'Ground to Ground',
                      ),
                      315 =>
                      array (
                        'key' => 'Mangla Tower',
                        'value' => 'Mangla Tower',
                      ),
                      316 =>
                      array (
                        'key' => 'DOHA APP RADAR',
                        'value' => 'DOHA APP RADAR',
                      ),
                      317 =>
                      array (
                        'key' => 'HAMAD TERM INFO',
                        'value' => 'HAMAD TERM INFO',
                      ),
                      318 =>
                      array (
                        'key' => 'HAMAD Tower',
                        'value' => 'HAMAD Tower',
                      ),
                      319 =>
                      array (
                        'key' => 'CTAF FSS',
                        'value' => 'CTAF FSS',
                      ),
                      320 =>
                      array (
                        'key' => 'Woodlands Adviso',
                        'value' => 'Woodlands Adviso',
                      ),
                      321 =>
                      array (
                        'key' => 'CLRN',
                        'value' => 'CLRN',
                      ),
                      322 =>
                      array (
                        'key' => 'DEPT',
                        'value' => 'DEPT',
                      ),
                      323 =>
                      array (
                        'key' => 'Beja tower',
                        'value' => 'Beja tower',
                      ),
                      324 =>
                      array (
                        'key' => 'Ground Control',
                        'value' => 'Ground Control',
                      ),
                      325 =>
                      array (
                        'key' => 'CLR',
                        'value' => 'CLR',
                      ),
                      326 =>
                      array (
                        'key' => 'TWR 06L/24R',
                        'value' => 'TWR 06L/24R',
                      ),
                      327 =>
                      array (
                        'key' => 'TWR 06R/24L',
                        'value' => 'TWR 06R/24L',
                      ),
                      328 =>
                      array (
                        'key' => '01L',
                        'value' => '01L',
                      ),
                      329 =>
                      array (
                        'key' => '01R',
                        'value' => '01R',
                      ),
                      330 =>
                      array (
                        'key' => 'RKTN_APP',
                        'value' => 'RKTN_APP',
                      ),
                      331 =>
                      array (
                        'key' => 'RKTN_DEP',
                        'value' => 'RKTN_DEP',
                      ),
                      332 =>
                      array (
                        'key' => 'RKTN_GND',
                        'value' => 'RKTN_GND',
                      ),
                      333 =>
                      array (
                        'key' => 'RKTN_TWR',
                        'value' => 'RKTN_TWR',
                      ),
                      334 =>
                      array (
                        'key' => 'RKTU_APP',
                        'value' => 'RKTU_APP',
                      ),
                      335 =>
                      array (
                        'key' => 'RKTU_GND',
                        'value' => 'RKTU_GND',
                      ),
                      336 =>
                      array (
                        'key' => 'RKTU_TWR',
                        'value' => 'RKTU_TWR',
                      ),
                      337 =>
                      array (
                        'key' => 'Multicom',
                        'value' => 'Multicom',
                      ),
                      338 =>
                      array (
                        'key' => 'FOC',
                        'value' => 'FOC',
                      ),
                      339 =>
                      array (
                        'key' => 'Unknown',
                        'value' => 'Unknown',
                      ),
                      340 =>
                      array (
                        'key' => 'Gorelovo CTA',
                        'value' => 'Gorelovo CTA',
                      ),
                      341 =>
                      array (
                        'key' => 'Gorelovo Tower',
                        'value' => 'Gorelovo Tower',
                      ),
                      342 =>
                      array (
                        'key' => 'SAME',
                        'value' => 'SAME',
                      ),
                      343 =>
                      array (
                        'key' => 'AUX',
                        'value' => 'AUX',
                      ),
                      344 =>
                      array (
                        'key' => 'MTZA',
                        'value' => 'MTZA',
                      ),
                      345 =>
                      array (
                        'key' => 'ILS:',
                        'value' => 'ILS:',
                      ),
                      346 =>
                      array (
                        'key' => 'Free',
                        'value' => 'Free',
                      ),
                      347 =>
                      array (
                        'key' => 'FCA',
                        'value' => 'FCA',
                      ),
                      348 =>
                      array (
                        'key' => 'ACE',
                        'value' => 'ACE',
                      ),
                      349 =>
                      array (
                        'key' => 'APPR2',
                        'value' => 'APPR2',
                      ),
                      350 =>
                      array (
                        'key' => 'GRD',
                        'value' => 'GRD',
                      ),
                      351 =>
                      array (
                        'key' => 'VHF - Air to air',
                        'value' => 'VHF - Air to air',
                      ),
                      352 =>
                      array (
                        'key' => 'AREA CTRL',
                        'value' => 'AREA CTRL',
                      ),
                      353 =>
                      array (
                        'key' => 'Company',
                        'value' => 'Company',
                      ),
                      354 =>
                      array (
                        'key' => 'MAIN',
                        'value' => 'MAIN',
                      ),
                      355 =>
                      array (
                        'key' => 'SECONDARY',
                        'value' => 'SECONDARY',
                      ),
                      356 =>
                      array (
                        'key' => 'APP ARGYLE TVSA',
                        'value' => 'APP ARGYLE TVSA',
                      ),
                      357 =>
                      array (
                        'key' => 'UTAPAO Approach',
                        'value' => 'UTAPAO Approach',
                      ),
                      358 =>
                      array (
                        'key' => 'BANGKOK APPROACH',
                        'value' => 'BANGKOK APPROACH',
                      ),
                      359 =>
                      array (
                        'key' => 'PMR',
                        'value' => 'PMR',
                      ),
                      360 =>
                      array (
                        'key' => 'Flight Planning',
                        'value' => 'Flight Planning',
                      ),
                      361 =>
                      array (
                        'key' => 'Piarco Apch',
                        'value' => 'Piarco Apch',
                      ),
                      362 =>
                      array (
                        'key' => 'Reserve',
                        'value' => 'Reserve',
                      ),
                      363 =>
                      array (
                        'key' => 'Service',
                        'value' => 'Service',
                      ),
                      364 =>
                      array (
                        'key' => 'ATIS (eng)',
                        'value' => 'ATIS (eng)',
                      ),
                      365 =>
                      array (
                        'key' => 'ATIS (rus)',
                        'value' => 'ATIS (rus)',
                      ),
                      366 =>
                      array (
                        'key' => 'brandonlubin',
                        'value' => 'brandonlubin',
                      ),
                      367 =>
                      array (
                        'key' => 'LANDING',
                        'value' => 'LANDING',
                      ),
                      368 =>
                      array (
                        'key' => '122.1',
                        'value' => '122.1',
                      ),
                      369 =>
                      array (
                        'key' => 'VOR',
                        'value' => 'VOR',
                      ),
                      370 =>
                      array (
                        'key' => 'NDD',
                        'value' => 'NDD',
                      ),
                      371 =>
                      array (
                        'key' => 'KOS VOR-DME',
                        'value' => 'KOS VOR-DME',
                      ),
                      372 =>
                      array (
                        'key' => 'APP CONTROL',
                        'value' => 'APP CONTROL',
                      ),
                      373 =>
                      array (
                        'key' => 'Oceanic',
                        'value' => 'Oceanic',
                      ),
                      374 =>
                      array (
                        'key' => 'ATIS-A',
                        'value' => 'ATIS-A',
                      ),
                      375 =>
                      array (
                        'key' => 'ATIS-D',
                        'value' => 'ATIS-D',
                      ),
                      376 =>
                      array (
                        'key' => 'EMG',
                        'value' => 'EMG',
                      ),
                      377 =>
                      array (
                        'key' => 'APP RAD',
                        'value' => 'APP RAD',
                      ),
                      378 =>
                      array (
                        'key' => 'CUT',
                        'value' => 'CUT',
                      ),
                      379 =>
                      array (
                        'key' => 'ZNC',
                        'value' => 'ZNC',
                      ),
                      380 =>
                      array (
                        'key' => 'ACC"N" & ACC"S"',
                        'value' => 'ACC"N" & ACC"S"',
                      ),
                      381 =>
                      array (
                        'key' => 'AREA CONTROL (E)',
                        'value' => 'AREA CONTROL (E)',
                      ),
                      382 =>
                      array (
                        'key' => 'AREA CONTROL (W)',
                        'value' => 'AREA CONTROL (W)',
                      ),
                      383 =>
                      array (
                        'key' => 'TWR(HO)',
                        'value' => 'TWR(HO)',
                      ),
                      384 =>
                      array (
                        'key' => 'TWR STD BY',
                        'value' => 'TWR STD BY',
                      ),
                      385 =>
                      array (
                        'key' => 'watch hours 1030',
                        'value' => 'watch hours 1030',
                      ),
                      386 =>
                      array (
                        'key' => 'Cmp',
                        'value' => 'Cmp',
                      ),
                      387 =>
                      array (
                        'key' => 'STANDBY',
                        'value' => 'STANDBY',
                      ),
                      388 =>
                      array (
                        'key' => 'CONTROL-1',
                        'value' => 'CONTROL-1',
                      ),
                      389 =>
                      array (
                        'key' => 'CONTROL-2',
                        'value' => 'CONTROL-2',
                      ),
                      390 =>
                      array (
                        'key' => 'CONTROL-3',
                        'value' => 'CONTROL-3',
                      ),
                      391 =>
                      array (
                        'key' => 'UNK',
                        'value' => 'UNK',
                      ),
                      392 =>
                      array (
                        'key' => 'GROUND (EAST)',
                        'value' => 'GROUND (EAST)',
                      ),
                      393 =>
                      array (
                        'key' => 'GROUND (MAIN)',
                        'value' => 'GROUND (MAIN)',
                      ),
                      394 =>
                      array (
                        'key' => 'GROUND (WEST)',
                        'value' => 'GROUND (WEST)',
                      ),
                      395 =>
                      array (
                        'key' => 'TOWER (01L/19R)',
                        'value' => 'TOWER (01L/19R)',
                      ),
                      396 =>
                      array (
                        'key' => 'TOWER (01R/19L)',
                        'value' => 'TOWER (01R/19L)',
                      ),
                      397 =>
                      array (
                        'key' => 'TMA',
                        'value' => 'TMA',
                      ),
                      398 =>
                      array (
                        'key' => 'SSB',
                        'value' => 'SSB',
                      ),
                      399 =>
                      array (
                        'key' => 'NUNUKAN INFO',
                        'value' => 'NUNUKAN INFO',
                      ),
                      400 =>
                      array (
                        'key' => 'ukn',
                        'value' => 'ukn',
                      ),
                      401 =>
                      array (
                        'key' => 'AWIS',
                        'value' => 'AWIS',
                      ),
                      402 =>
                      array (
                        'key' => 'Brisbane Centre',
                        'value' => 'Brisbane Centre',
                      ),
                      403 =>
                      array (
                        'key' => 'ML CEN',
                        'value' => 'ML CEN',
                      ),
                      404 =>
                      array (
                        'key' => 'Avalon Approach',
                        'value' => 'Avalon Approach',
                      ),
                      405 =>
                      array (
                        'key' => 'Gliding Frequenc',
                        'value' => 'Gliding Frequenc',
                      ),
                      406 =>
                      array (
                        'key' => 'AD CEN',
                        'value' => 'AD CEN',
                      ),
                      407 =>
                      array (
                        'key' => 'ED TWR',
                        'value' => 'ED TWR',
                      ),
                      408 =>
                      array (
                        'key' => 'UHF Ch 10',
                        'value' => 'UHF Ch 10',
                      ),
                      409 =>
                      array (
                        'key' => 'Area Frequency',
                        'value' => 'Area Frequency',
                      ),
                      410 =>
                      array (
                        'key' => 'APP/DEP EAST',
                        'value' => 'APP/DEP EAST',
                      ),
                      411 =>
                      array (
                        'key' => 'APP/DEP WEST',
                        'value' => 'APP/DEP WEST',
                      ),
                      412 =>
                      array (
                        'key' => 'ATIS/VOR',
                        'value' => 'ATIS/VOR',
                      ),
                      413 =>
                      array (
                        'key' => 'TWR/CTAF',
                        'value' => 'TWR/CTAF',
                      ),
                      414 =>
                      array (
                        'key' => 'SMCV',
                        'value' => 'SMCV',
                      ),
                      415 =>
                      array (
                        'key' => 'FAEL Special Rul',
                        'value' => 'FAEL Special Rul',
                      ),
                      416 =>
                      array (
                        'key' => 'Under TMA',
                        'value' => 'Under TMA',
                      ),
                      417 =>
                      array (
                        'key' => 'TWR/Radio',
                        'value' => 'TWR/Radio',
                      ),
                      418 =>
                      array (
                        'key' => 'GF',
                        'value' => 'GF',
                      ),
                      419 =>
                      array (
                        'key' => 'Hand Held',
                        'value' => 'Hand Held',
                      ),
                      420 =>
                      array (
                        'key' => 'AP01',
                        'value' => 'AP01',
                      ),
                      421 =>
                      array (
                        'key' => 'AP02',
                        'value' => 'AP02',
                      ),
                      422 =>
                      array (
                        'key' => 'AP03',
                        'value' => 'AP03',
                      ),
                      423 =>
                      array (
                        'key' => 'APN01',
                        'value' => 'APN01',
                      ),
                      424 =>
                      array (
                        'key' => 'APN02',
                        'value' => 'APN02',
                      ),
                      425 =>
                      array (
                        'key' => 'ATIS-I',
                        'value' => 'ATIS-I',
                      ),
                      426 =>
                      array (
                        'key' => 'ATIS-O',
                        'value' => 'ATIS-O',
                      ),
                      427 =>
                      array (
                        'key' => 'GND01',
                        'value' => 'GND01',
                      ),
                      428 =>
                      array (
                        'key' => 'GND02',
                        'value' => 'GND02',
                      ),
                      429 =>
                      array (
                        'key' => 'TWR01',
                        'value' => 'TWR01',
                      ),
                      430 =>
                      array (
                        'key' => 'TWR02',
                        'value' => 'TWR02',
                      ),
                      431 =>
                      array (
                        'key' => 'DCL',
                        'value' => 'DCL',
                      ),
                    ),
                     'defaultValue' => '',
                     'columnLength' => 190,
                     'dynamicOptions' => false,
                     'defaultValueGenerator' => '',
                     'width' => '',
                     'optionsProviderType' => 'configure',
                     'optionsProviderClass' => 'Pimcore\\Bundle\\CoreBundle\\OptionsProvider\\SelectOptionsOptionsProvider',
                     'optionsProviderData' => 'FrequenciesType',
                  )),
                ),
                 'locked' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'fieldtype' => 'panel',
                 'layout' => NULL,
                 'border' => false,
                 'icon' => '',
                 'labelWidth' => 100,
                 'labelAlign' => 'left',
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' =>
            array (
            ),
             'fieldtype' => 'region',
             'icon' => '',
          )),
          1 =>
          \Pimcore\Model\DataObject\ClassDefinition\Data\Wysiwyg::__set_state(array(
             'name' => 'description',
             'title' => 'Description',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'fieldtype' => '',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' =>
            array (
            ),
             'toolbarConfig' => '',
             'excludeFromSearchIndex' => false,
             'maxCharacters' => '',
             'height' => '',
             'width' => '',
          )),
        ),
         'locked' => false,
         'blockedVarsForExport' =>
        array (
        ),
         'fieldtype' => 'panel',
         'layout' => NULL,
         'border' => false,
         'icon' => '',
         'labelWidth' => 100,
         'labelAlign' => 'left',
      )),
    ),
     'locked' => false,
     'blockedVarsForExport' =>
    array (
    ),
     'fieldtype' => 'panel',
     'layout' => NULL,
     'border' => false,
     'icon' => NULL,
     'labelWidth' => 100,
     'labelAlign' => 'left',
  )),
   'icon' => '',
   'group' => 'airport',
   'showAppLoggerTab' => false,
   'linkGeneratorReference' => '',
   'previewGeneratorReference' => '',
   'compositeIndices' =>
  array (
  ),
   'showFieldLookup' => false,
   'propertyVisibility' =>
  array (
    'grid' =>
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
    'search' =>
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
  ),
   'enableGridLocking' => false,
   'deletedDataComponents' =>
  array (
  ),
   'blockedVarsForExport' =>
  array (
  ),
   'fieldDefinitionsCache' =>
  array (
  ),
   'activeDispatchingEvents' =>
  array (
  ),
));
