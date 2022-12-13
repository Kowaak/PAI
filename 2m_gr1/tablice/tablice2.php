<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $age = array("wiek1"=>"35", "wiek2"=>"37", "wiek3"=>"43");
        //echo $age['wiek1'];
        foreach($age as $x => $y)
            echo"<br>klucz ".$x." wartość ".$y;
        /*
            array()	Creates an array
            array_change_key_case()	Changes all keys in an array to lowercase or uppercase
            array_chunk()	Splits an array into chunks of arrays
            array_column()	Returns the values from a single column in the input array
            array_combine()	Creates an array by using the elements from one "keys" array and one "values" array
            array_count_values()	Counts all the values of an array
            array_diff()	Compare arrays, and returns the differences (compare values only)
            array_diff_assoc()	Compare arrays, and returns the differences (compare keys and values)
            array_diff_key()	Compare arrays, and returns the differences (compare keys only)
            array_diff_uassoc()	Compare arrays, and returns the differences (compare keys and values, using a user-defined key comparison function)
            array_diff_ukey()	Compare arrays, and returns the differences (compare keys only, using a user-defined key comparison function)
            array_fill()	Fills an array with values
            array_fill_keys()	Fills an array with values, specifying keys
            array_filter()	Filters the values of an array using a callback function
            array_flip()	Flips/Exchanges all keys with their associated values in an array
            array_intersect()	Compare arrays, and returns the matches (compare values only)
            array_intersect_assoc()	Compare arrays and returns the matches (compare keys and values)
            array_intersect_key()	Compare arrays, and returns the matches (compare keys only)
            array_intersect_uassoc()	Compare arrays, and returns the matches (compare keys and values, using a user-defined key comparison function)
            array_intersect_ukey()	Compare arrays, and returns the matches (compare keys only, using a user-defined key comparison function)
            array_key_exists()	Checks if the specified key exists in the array
            array_keys()	Returns all the keys of an array
            array_map()	Sends each value of an array to a user-made function, which returns new values
            array_merge()	Merges one or more arrays into one array
            array_merge_recursive()	Merges one or more arrays into one array recursively
            array_multisort()	Sorts multiple or multi-dimensional arrays
            array_pad()	Inserts a specified number of items, with a specified value, to an array
            array_pop()	Deletes the last element of an array
            array_product()	Calculates the product of the values in an array
            array_push()	Inserts one or more elements to the end of an array
            array_rand()	Returns one or more random keys from an array
            array_reduce()	Returns an array as a string, using a user-defined function
            array_replace()	Replaces the values of the first array with the values from following arrays
            array_replace_recursive()	Replaces the values of the first array with the values from following arrays recursively
            array_reverse()	Returns an array in the reverse order
            array_search()	Searches an array for a given value and returns the key
            array_shift()	Removes the first element from an array, and returns the value of the removed element
            array_slice()	Returns selected parts of an array
            array_splice()	Removes and replaces specified elements of an array
            array_sum()	Returns the sum of the values in an array
            array_udiff()	Compare arrays, and returns the differences (compare values only, using a user-defined key comparison function)
            array_udiff_assoc()	Compare arrays, and returns the differences (compare keys and values, using a built-in function to compare the keys and a user-defined function to compare the values)
            array_udiff_uassoc()	Compare arrays, and returns the differences (compare keys and values, using two user-defined key comparison functions)
            array_uintersect()	Compare arrays, and returns the matches (compare values only, using a user-defined key comparison function)
            array_uintersect_assoc()	Compare arrays, and returns the matches (compare keys and values, using a built-in function to compare the keys and a user-defined function to compare the values)
            array_uintersect_uassoc()	Compare arrays, and returns the matches (compare keys and values, using two user-defined key comparison functions)
            array_unique()	Removes duplicate values from an array
            array_unshift()	Adds one or more elements to the beginning of an array
            array_values()	Returns all the values of an array
            array_walk()	Applies a user function to every member of an array
            array_walk_recursive()	Applies a user function recursively to every member of an array
            arsort()	Sorts an associative array in descending order, according to the value
            asort()	Sorts an associative array in ascending order, according to the value
            compact()	Create array containing variables and their values
            count()	Returns the number of elements in an array
            current()	Returns the current element in an array
            each()	Deprecated from PHP 7.2. Returns the current key and value pair from an array
            end()	Sets the internal pointer of an array to its last element
            extract()	Imports variables into the current symbol table from an array
            in_array()	Checks if a specified value exists in an array
            key()	Fetches a key from an array
            krsort()	Sorts an associative array in descending order, according to the key
            ksort()	Sorts an associative array in ascending order, according to the key
            list()	Assigns variables as if they were an array
            natcasesort()	Sorts an array using a case insensitive "natural order" algorithm
            natsort()	Sorts an array using a "natural order" algorithm
            next()	Advance the internal array pointer of an array
            pos()	Alias of current()
            prev()	Rewinds the internal array pointer
            range()	Creates an array containing a range of elements
            reset()	Sets the internal pointer of an array to its first element
            rsort()	Sorts an indexed array in descending order
            shuffle()	Shuffles an array
            sizeof()	Alias of count()
            sort()	Sorts an indexed array in ascending order
            uasort()	Sorts an array by values using a user-defined comparison function
            uksort()	Sorts an array by keys using a user-defined comparison function
            usort()	Sorts an array using a user-defined comparison function
        */
        echo"<br>";
        $array = [ //tablica 2-wymiarowa
            "warzywa" => [ //tablica 1 wymiarowa
                "waz1" => "brokuł",
                "waz2" => "cebula", 
                "waz3" => "por" 
            ],
            "owoce" => [ //tablica 1 wymiarowa
                "owo1" => "jagoda",
                "owo2" => "truskawka",
                "owo3" => "jabłko"
            ],
            "komputery" => [ //tablica 1 wymiarowa
                "kom1" => "wartosc_1",
                "kom2" => "wartosc_2",
                "kom3" => "wartosc_3" 
            ],
        ];
        echo"<br>";
        print_r($array);
        echo"<br><br>";
        var_dump($array);
        echo"<br><br>";
        var_export($array);
        echo"<br><br>";
        $kontakt = []; //deklaracja tablicy
        //pierwszy kontakt
        $kontakt['imie'] = 'Adam';
        $kontakt['nazwisko'] = 'Kowalski';
        $kontakt['telefon'] = '123456789';
        
        $kontakty = []; // deklaracja tablicy
        //$kontakty staje sie tablica 2 wymiarową, ponieważ wstawiamy do niej tablice $kontakt
        array_push($kontakty,$kontakt);
        //drugi kontakt, wypelniamy tablice $kontakt
        $kontakt['imie'] = 'Ewa';
        $kontakt['nazwisko'] = 'Nowakówna';
        $kontakt['telefon'] = '987654321';

        print"<br>Lista kontaktów:<br>";
        $e = count($kontakty); //ile jest elementów w tablicy
        //dostep do elementów tablicy
        
        //nalezy zdefiniowac tablice asocjacyjna ktorej kluczem beda imiona a wartoscia nazwisko, sortowac wedlug nazwisk - rosnaco, a w drugiej czesci wedlug klucza - rosnaco
        $imona = array("Maciej"=>"Kowalski", "Filip"=>"Piec", "Alan"=>"Nowak");
        foreach($imona as $klucz=>$y)
            echo"$y $klucz <br>"; // przed sortowaniem
        echo"<br>";
        
        asort($imona);
        foreach($imona as $klucz=>$y)
            echo"$y $klucz <br>"; // po sortowaniu po wartosci
        echo"<br>";
        
        ksort($imona);
        foreach($imona as $klucz=>$y)
            echo"$y $klucz <br>"; // po sortowaniu po kluczu
        echo"<br>";


        function my_sort($a,$b) // funkcja sortowania
        {
        if ($a==$b) return 0;
        return ($a<$b)?-1:1;
        }
        $a=array(4,2,8,6);
        foreach($a as $klucz=>$y)
            echo"$y $klucz <br>"; 
        echo"<br>"; // przed sortowaniem

        usort($a,"my_sort");
        foreach($a as $klucz=>$y)
            echo"$y $klucz <br>"; 
        echo"<br>"; // po sortowaniu

        $str = "14/11/2022;jan kowalski;dzien:poniedzialek";
        print_r (explode(";",$str)); 
        $tablica = (explode(";",$str)); 
        //pierwszy argument = separator, drugi argument = nazwa stringa
        //print_r wypisanie zawartości tablicy wraz z jej strukturą
        echo"<br>";
        $str2 = implode("_ala_ma_kota",$tablica);
        echo $str2;
    ?>
</body>
</html>