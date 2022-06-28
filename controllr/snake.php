<?php

namespace controllr;


class snake implements Animal
{
    use dog;
    use dog1;

    public function chat()
    {
        echo "ththth";
    }
}
