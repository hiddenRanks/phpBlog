<?php

namespace Gondr\Controller;

use Jenssegers\Blade\Blade;

class MasterController
{
    public function render($page, $data = [])
    {
        //extract($data); //blade가 알아서 해주므로 필요 없다.

        $blade = new Blade(__VIEW, __CACHE);

        echo $blade->make($page, $data);
    }
}
