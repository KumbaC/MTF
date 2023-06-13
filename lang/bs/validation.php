<?php

declare(strict_types=1);

return [
    'accepted'             => 'Polje :attribute mora biti prihvaćeno.',
    'accepted_if'          => ':Attribute se mora prihvatiti kada je :other :value.',
    'active_url'           => 'Polje :attribute nije validan URL.',
    'after'                => 'Polje :attribute mora biti datum nakon :date.',
    'after_or_equal'       => 'Polje :attribute mora biti datum nakon ili jednak :date.',
    'alpha'                => 'Polje :attribute može sadržati samo slova.',
    'alpha_dash'           => 'Polje :attribute može sadržati samo slova, brojeve i povlake.',
    'alpha_num'            => 'Polje :attribute može sadržati samo slova i brojeve.',
    'array'                => 'Polje :attribute mora biti niz.',
    'ascii'                => ':Attribute mora sadržavati samo jednobajtne alfanumeričke znakove i simbole.',
    'before'               => 'Polje :attribute mora biti datum prije :date.',
    'before_or_equal'      => 'Polje :attribute mora biti datum prije ili jednak :date.',
    'between'              => [
        'array'   => 'Polje :attribute mora sadržati između :min i :max stavki.',
        'file'    => 'Polje :attribute mora imati veličinu između :min i :max kilobajta.',
        'numeric' => 'Polje :attribute mora imati vrijednost između :min i :max.',
        'string'  => 'Polje :attribute mora sadržati između :min i :max znakova.',
    ],
    'boolean'              => 'Polje :attribute mora biti tačno ili netačno.',
    'confirmed'            => 'Potvrda polja :attribute se ne poklapa.',
    'current_password'     => 'Lozinka je netačna.',
    'date'                 => 'Polje :attribute nema ispravan datum.',
    'date_equals'          => 'Polje :attribute mora biti datum jednak :date.',
    'date_format'          => 'Polje :attribute se ne poklapa s formatom :format.',
    'decimal'              => ':Attribute mora imati :decimal decimalnih mjesta.',
    'declined'             => ':Attribute se mora odbiti.',
    'declined_if'          => ':Attribute se mora odbiti kada je :other :value.',
    'different'            => 'Polja :attribute i :other moraju biti različita.',
    'digits'               => 'Polje :attribute mora sardžati :digits broja.',
    'digits_between'       => 'Polje :attribute mora sardžati između :min i :max broja.',
    'dimensions'           => 'Dimenzije slike polja :attribute nisu validne.',
    'distinct'             => 'Polje :attribute ima dvostruku vrijednost.',
    'doesnt_end_with'      => ':Attribute se ne može završiti s jednim od sljedećih: :values.',
    'doesnt_start_with'    => ':Attribute možda ne počinje s jednim od sljedećih: :values.',
    'email'                => 'Format polja :attribute mora biti validan e-mail.',
    'ends_with'            => 'Polje :attribute se mora završiti s jednom od sljedećih vrijednosti: :values.',
    'enum'                 => 'Odabranih :attribute je nevažećih.',
    'exists'               => 'Odabrano polje :attribute nije validno.',
    'file'                 => 'Polje :attribute mora biti fajl.',
    'filled'               => 'Polje :attribute je mora sadržati vrijednost.',
    'gt'                   => [
        'array'   => 'Polje :attribute mora sadržati više od :value stavki.',
        'file'    => 'Polje :attribute mora imati veličinu veću od :value kilobajta.',
        'numeric' => 'Polje :attribute mora imati vrijednost veću od :value.',
        'string'  => 'Polje :attribute mora sadržati više od :value znakova.',
    ],
    'gte'                  => [
        'array'   => 'Polje :attribute mora sadržati :value stavki ili više.',
        'file'    => 'Polje :attribute mora imati veličinu veću ili jednaku :value kilobajta.',
        'numeric' => 'Polje :attribute mora imati vrijednost veću ili jednaku :value.',
        'string'  => 'Polje :attribute mora sadržati :value znakova ili više.',
    ],
    'image'                => 'Polje :attribute mora biti slika.',
    'in'                   => 'Odabrano polje :attribute nije validno.',
    'in_array'             => 'Polje :attribute ne postoji u :other.',
    'integer'              => 'Polje :attribute mora biti broj.',
    'ip'                   => 'Polje :attribute mora biti validna IP adresa.',
    'ipv4'                 => 'Polje :attribute mora biti validna IPv4 adresa.',
    'ipv6'                 => 'Polje :attribute mora biti validna IPv6 adresa.',
    'json'                 => 'Polje :attribute mora biti validan JSON string.',
    'lowercase'            => ':Attribute mora biti malim slovima.',
    'lt'                   => [
        'array'   => 'Polje :attribute mora sadržati manje od :value stavki.',
        'file'    => 'Polje :attribute mora imati veličinu manju od :value kilobajta.',
        'numeric' => 'Polje :attribute imati vrijednost manju od :value.',
        'string'  => 'Polje :attribute mora sadržati manje od :value znakova.',
    ],
    'lte'                  => [
        'array'   => 'Polje :attribute ne može sadržati više od :value stavki.',
        'file'    => 'Polje :attribute mora imati veličinu manju ili jednaku :value kilobajta.',
        'numeric' => 'Polje :attribute mora imati vrijednost manju ili jednaku :value.',
        'string'  => 'Polje :attribute ne može sadržati više od :value znakova.',
    ],
    'mac_address'          => ':Attribute mora biti važeća MAC adresa.',
    'max'                  => [
        'array'   => 'Polje :attribute mora sadržati manje od :max stavki.',
        'file'    => 'Polje :attribute mora imati veličinu manju od :max kilobajta.',
        'numeric' => 'Polje :attribute mora imati vrijednost manju od :max.',
        'string'  => 'Polje :attribute mora sadržati manje od :max znakova.',
    ],
    'max_digits'           => ':Attribute ne smije imati više od :max cifara.',
    'mimes'                => 'Polje :attribute mora biti fajl tipa: :values.',
    'mimetypes'            => 'Polje :attribute mora biti fajl tipa: :values.',
    'min'                  => [
        'array'   => 'Polje :attribute mora sadržati najmanje :min stavki.',
        'file'    => 'Fajl :attribute mora biti najmanje :min kilobajta.',
        'numeric' => 'Polje :attribute mora biti najmanje :min.',
        'string'  => 'Polje :attribute mora sadržati najmanje :min znakova.',
    ],
    'min_digits'           => ':Attribute mora imati najmanje :min cifara.',
    'missing'              => 'Polje :attribute mora nedostajati.',
    'missing_if'           => 'Polje :attribute mora nedostajati kada je :other :value.',
    'missing_unless'       => 'Polje :attribute mora nedostajati osim ako :other nije :value.',
    'missing_with'         => 'Polje :attribute mora nedostajati kada je prisutno :values.',
    'missing_with_all'     => 'Polje :attribute mora nedostajati kada je prisutno :values.',
    'multiple_of'          => 'Vrijednost polja :attribute mora biti djeljiva sa :value',
    'not_in'               => 'Odabrani element polja :attribute nije validan.',
    'not_regex'            => 'Format polja :attribute nije ispravan.',
    'numeric'              => 'Polje :attribute mora biti broj.',
    'password'             => [
        'letters'       => ':Attribute mora sadržavati najmanje jedno slovo.',
        'mixed'         => ':Attribute mora sadržavati najmanje jedno veliko i jedno malo slovo.',
        'numbers'       => ':Attribute mora sadržavati najmanje jedan broj.',
        'symbols'       => ':Attribute mora sadržavati najmanje jedan simbol.',
        'uncompromised' => 'Datih :attribute pojavilo se u curenju podataka. Molimo odaberite drugu :attribute.',
    ],
    'present'              => 'Polje :attribute mora biti prisutno.',
    'prohibited'           => ':Attribute polje je zabranjeno.',
    'prohibited_if'        => ':Attribute polje je zabranjeno kada :other ima :value.',
    'prohibited_unless'    => 'Polje :attribute je zabranjeno osim ako :other nije :values.',
    'prohibits'            => 'Polje :attribute zabranjuje prisustvo :other.',
    'regex'                => 'Format polja :attribute nije ispravan.',
    'required'             => 'Polje :attribute je obavezno.',
    'required_array_keys'  => 'Polje :attribute mora sadržavati unose za: :values.',
    'required_if'          => 'Polje :attribute je obavezno kada :other ima vrijednost :value.',
    'required_if_accepted' => 'Polje :attribute je obavezno kada se prihvati :other.',
    'required_unless'      => 'Polje :attribute je obavezno osim ako vrijednost polja :other postoji u sljedećem nizu: :values.',
    'required_with'        => 'Polje :attribute je obavezno kada je bar jedno od polja :values prisutno.',
    'required_with_all'    => 'Polje :attribute je obavezno kada su polja :values prisutna.',
    'required_without'     => 'Polje :attribute je obavezno kada je bar jedno od polja :values nije prisutno.',
    'required_without_all' => 'Polje :attribute je obavezno kada polja :values nisu prisutna.',
    'same'                 => 'Polja :attribute i :other se moraju poklapati.',
    'size'                 => [
        'array'   => 'Polje :attribute mora biti :size znakova.',
        'file'    => 'Fajl :attribute mora biti :size kilobajta.',
        'numeric' => 'Polje :attribute mora biti :size.',
        'string'  => 'Polje :attribute mora biti :size znakova.',
    ],
    'starts_with'          => 'Polje :attribute mora početi s jednom od sljedećih vrijednosti: :values.',
    'string'               => 'Polje :attribute mora sadrzavati slova.',
    'timezone'             => 'Polje :attribute mora biti ispravna vremenska zona.',
    'ulid'                 => ':Attribute mora biti važeći ULID.',
    'unique'               => 'Polje :attribute već postoji.',
    'uploaded'             => 'Učitavanje polja :attribute nije uspjelo.',
    'uppercase'            => ':Attribute mora biti velikim slovima.',
    'url'                  => 'Format polja :attribute nije validan.',
    'uuid'                 => 'Polje :attribute mora biti validan UUID.',
    'attributes'           => [
        'address'                  => 'adresa',
        'age'                      => 'dob',
        'amount'                   => 'iznos',
        'area'                     => 'površina',
        'available'                => 'dostupno',
        'birthday'                 => 'rođendan',
        'body'                     => 'tijelo',
        'city'                     => 'grad',
        'content'                  => 'sadržaj',
        'country'                  => 'država',
        'created_at'               => 'kreirano',
        'creator'                  => 'autor',
        'current_password'         => 'aktualna šifra',
        'date'                     => 'datum',
        'date_of_birth'            => 'datum rođenja',
        'day'                      => 'dan',
        'deleted_at'               => 'obrisano',
        'description'              => 'opis',
        'district'                 => 'općina',
        'duration'                 => 'trajanje',
        'email'                    => 'email',
        'excerpt'                  => 'izdvojeno',
        'filter'                   => 'filter',
        'first_name'               => 'ime',
        'gender'                   => 'spol',
        'group'                    => 'grupa',
        'hour'                     => 'sat',
        'image'                    => 'slika',
        'last_name'                => 'prezime',
        'lesson'                   => 'lekcija',
        'line_address_1'           => 'adresa',
        'line_address_2'           => 'dodatak adresi',
        'message'                  => 'poruka',
        'middle_name'              => 'srednje ime',
        'minute'                   => 'minuta',
        'mobile'                   => 'mobitel',
        'month'                    => 'mjesec',
        'name'                     => 'ime',
        'national_code'            => 'Nacionalni kod',
        'number'                   => 'broj',
        'password'                 => 'šifra',
        'password_confirmation'    => 'potvrda šifre',
        'phone'                    => 'telefon',
        'photo'                    => 'fotografija',
        'postal_code'              => 'poštanski broj',
        'price'                    => 'cijena',
        'province'                 => 'provincija',
        'recaptcha_response_field' => 'recaptcha polje',
        'remember'                 => 'zapamti me',
        'restored_at'              => 'vraćeno',
        'result_text_under_image'  => 'tekst rezultata ispod slike',
        'role'                     => 'uloga',
        'second'                   => 'sekunda',
        'sex'                      => 'spol',
        'short_text'               => 'kratak tekst',
        'size'                     => 'veličina',
        'state'                    => 'država',
        'street'                   => 'ulica',
        'student'                  => 'učenik',
        'subject'                  => 'predmet',
        'teacher'                  => 'nastavnik',
        'terms'                    => 'uslovi',
        'test_description'         => 'testni opis',
        'test_locale'              => 'testni jezik',
        'test_name'                => 'testno ime',
        'text'                     => 'tekst',
        'time'                     => 'vrijeme',
        'title'                    => 'naslov',
        'updated_at'               => 'ažurirano',
        'username'                 => 'korisničko ime',
        'year'                     => 'godina',
    ],
];
