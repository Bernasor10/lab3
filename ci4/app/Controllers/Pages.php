<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends BaseController
{
    public function view($page = 'home')
    {
        if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        if ($page === 'loading') {
            return view('pages/' . $page, $data);
        } else {
            return view('templates/header', $data)
                . view('pages/' . $page)
                . view('templates/footer');
        }
    }
}