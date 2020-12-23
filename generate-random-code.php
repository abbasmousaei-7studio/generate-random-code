//GENERATE LINK CODE
function generate_string($strength = 21)
{
    $input = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $input_length = strlen($input);
    $random_string = '';
    for ($i = 0; $i < $strength; ++$i) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }

    return $random_string;
}

//GENERATE LINK CODE
function generate_number($numlength = 21)
{
    $input = '123456789';
    $input_length = strlen($input);
    $random_number = '';
    for ($i = 0; $i < $numlength; ++$i) {
        $random_digit = $input[mt_rand(0, $input_length - 1)];
        $random_number .= $random_digit;
    }

    return $random_number;
}