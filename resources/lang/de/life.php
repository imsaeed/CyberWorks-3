<?php
return array (
    'title' => 'Life',
    'generic' => array (
        'name' => 'Name',
        'bank' => 'Konto',
        'cash' => 'Bargeld',
        'pid' => 'Player ID',
        'cRank' => 'Polizei Level',
        'mRank' => 'Medic Level',
        'aRank' => 'Admin Level',
        'civ' => 'Zivilist',
        'cop' => 'Polizei',
        'med' => 'Medic',
        'admin' => 'Admin',
        'type' => 'Typ',
        'owner' => 'Besitzer',
        'vItems' => 'Virtuelle Items',
        'inventory' => 'Inventar',
        'pos' => 'Position',
        'edit' => 'Bearbeiten',
    ),
    'lic' => array (
        'license_civ_driver' => 'Führerschein',
        'license_civ_boat' => 'Bootschein',
        'license_civ_pilot' => 'Pilotenschein',
        'license_civ_gun' => 'Waffenschein',
        'license_civ_dive' => 'Tauchschein',
        'license_civ_oil' => 'Ölverarbeitung',
        'license_civ_heroin' => 'Heroinverarbeitung',
        'license_civ_marijuana' => 'Marijuanaverarbeitung',
        'license_civ_rebel' => 'Rebellenausbildung',
        'license_civ_trucking' => 'Truck Lizenz',
        'license_civ_diamond' => 'Diamantenverarbeitung',
        'license_civ_salt' => 'Salzverarbeitung',
        'license_civ_cocaine' => 'Kokainverarbeitung',
        'license_civ_sand' => 'Sandverarbeitung',
        'license_civ_iron' => 'Eisenverarbeitung',
        'license_civ_copper' => 'Kupferverarbeitung',
        'license_civ_cement' => 'Zementverarbeitung',
        'license_civ_home' => 'Wohneigentumslizenz',
        'license_civ_truck' => 'Truck Lizenz',
        'license_civ_medmarijuana' => 'Med. Marijuana',
        'license_civ_silber' => 'Silberverarbeitung',
        'license_civ_aluminium' => 'Aluminiumverarbeitung',
        'license_civ_iridium' => 'Iridiumverarbeitung',
        'license_civ_bier' => 'Bierverarbeitung',
        'license_civ_lsd' => 'LSD Verarbeitung',
        'license_civ_uran' => 'Uranverarbeitung',
        'license_cop_cAir' => 'Pilotenausbildung',
        'license_cop_cg' => 'Küstenwachenausbildung',
        'license_cop_gsg9' => 'GSG9',
        'license_med_mAir' => 'Pilotenausbildung',
    ),
    'player' => array (
        'title' => 'Spieler',
        'tiles' => array (
            'bank' => array (
                'title' => 'Konto',
                'desc' => 'Gesamter Kontostand',
            ),
            'cash' => array (
                'desc' => 'Gesamte Summe auf der Hand',
            ),
            'admin' => array (
                'desc' => 'Admin Level im Spiel',
            ),
            'cop' => array (
                'desc' => 'Rang in der Polizei',
            ),
            'medic' => array (
                'desc' => 'Rang in der Medic',
            ),
        ),
        'steam' => array (
            'profile' => 'Steam Profil',
            'id' => 'SteamID',
        ),
        'buttons' => array (
            'compensate' => 'Erstatten',
            'addNote' => 'Notiz hinzufügen',
        ),
        'tabs' => array (
            'lic' => array (
                'civ' => 'Zivililist Lizenzen',
                'cop' => 'Polizei Lizenzen',
                'med' => 'Medic Lizenzen',
            ),
            'veh' => 'Fahrzeuge',
            'notes' => 'Notizen',
            'eLog' => 'Bearbeitungslog',
        ),
        'modals' => array(
            'compensate' => array(
                'title' =>  'Betrag'
            ),
        ),
        'guid' => 'GUID',
        'donator' => 'Spender',
        'jailed' => 'Knast'
    ),
    'players' => array (
        'title' => 'Spieler',
        'actions' => 'Bearbeiten',
    ),
    'vehicles' => array (
        'title' => 'Fahrzeuge',
        'titleSingle' => 'Fahrzeug',
        'id' => 'Fahrzeug ID',
        'class' => 'Fahrzeug Class Name',
        'side' => 'Seite',
        'alive' => 'Ausgeparkt',
        'active' => 'Aktiv',
        'plate' => 'Kennzeichen',
        'color' => 'Farbe/Skin',
        'garage' => 'In der Garage',
        'update' => 'Änderungen Anwenden',
        'refule' => 'Auftanken?',
        'repair' => 'Repariert',
    ),
    'houses' => array (
        'title' => 'Häuser',
        'titleSingle' => 'Haus',
        'id' => 'Haus ID',
        'update' => 'Anwenden'
    ),
    'gangs' => array (
        'title' => 'Gangs',
        'titleSingle' => 'Gang',
        'maxMem' => 'Max. Mitglieder',
        'mem' => 'Mitglieder',
        'update' => 'Anwenden',
        'funds' => 'Gangkonto',
    ),
    'containers' => array (
        'title' => 'Container',
        'titleSingle' => 'Container',
        'id' => 'Container ID',
        'class' => 'Classname',
        'dir' => 'Dir',
        'update' => 'Anwenden',
    ),
    'perms' => array(
        'view' => 'Sehen',
        'edit' => 'Bearbeiten',
        'admin' => 'Admin',
        'player' => array(
            'view' => array(
                'player' => 'Spieler Stats sehen',
                'players' => 'Spielerliste sehen',
                'notes' => 'Spieler Notizen sehen',
                'civLic' => 'Civ Lizenzen sehen',
                'copLic' => 'Polizei Lizenzen sehen',
                'medLic' => 'Medic Lizenzen sehen',
                'editLog' => 'Bearbeitungslog sehen',
                'veh' => 'Spieler Fahrzeuge sehen',
            ),
            'edit' => array(
                'cash' => 'Bargeld bearbeiten',
                'bank' => 'Konto bearbeiten',
                'donator' => 'Donatorrang bearbeiten',
                'jailed' => 'Jailstatus bearbeiten',
                'civLic' => 'Civ Lizenzen bearbeiten',
                'copLic' => 'Polizei Lizenzen bearbeiten',
                'medLic' => 'Medic Lizenzen bearbeiten',
                'cRank' => 'Polizei Rang bearbeiten',
                'mRank' => 'Medic Rang bearbeiten'
            ),
            'admin' => array(
                'aRank' => 'Admin Rang bearbeiten',
                'blacklist' => 'Blacklist bearbeiten',
                'comp' => 'Geld erstatten',
                'addNote' => 'Notizen hinzufügen',
                'delNote' => 'Notizen löschen',
            ),
        ),
        'veh' => array(
            'view' => array(
                'vehicle' => 'Fahrzeug Stats sehen',
                'vehicles' => 'Fahrzeugliste sehen',
            ),
            'edit' => 'Fahrzeuge bearbeiten',
        ),
        'gang' => array(
            'view' => 'Gangliste sehen',
            'edit' => 'Gangs bearbeiten',
        ),
        'house' => array(
            'view' => 'Häuserliste sehen',
            'edit' => 'Häuser bearbeiten'
        ),
        'container' => array(
            'view' => 'Containerliste sehen',
            'edit' => 'Containers bearbeiten',
        ),
    ),
);