<?php

namespace App\Helpers;

class Helper
{
    public static function category($categories)
    {
        $html = '';

        foreach ($categories as $key => $category) {
                $html .= '
                  <tr>
                    <td> ' . $category->id . ' </td>
                    <td> ' . $category->name . ' </td>
                    <td> ' . $category->excerpt . ' </td>
                    <td> ' . $category->active . ' 
                    </td>
                    <td> ' . $category->updated_at . ' </td>
          <td> 
            <a class="btn btn-primary btn-sm" href="/admin/categories/edit/' . $category->id . '">
                <i class="fas fa-edit"></i>
            </a>
            <a href="#" class="btn btn-danger btn-sm"
                onclick="removeRow(' . $category->id . ', \'/admin/categories/destroy\')">
                <i class="fas fa-trash"></i>
            </a>
          </td>
                  </tr>';
        }
        return $html;
    }
}
