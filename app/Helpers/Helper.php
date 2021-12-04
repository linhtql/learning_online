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
                    <td> ' . $category->active . ' </td>
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

  public static function course($courses)
  {
    $html = '';

    foreach ($courses as $key => $course) {
      $html .= '
                <tr>
                  <td> ' . $course->id . ' </td>
                  <td> ' . $course->name . ' </td>
                  <td> ' . $course->category->name . ' </td>
                  <td> ' . $course->excerpt . ' </td>
                  <td> ' . $course->active . ' </td>
                  <td> ' . $course->price . ' </td>
                  <td> ' . $course->price_sale . ' </td>
                  <td> ' . $course->updated_at . ' </td>
                  <td> 
                    <a class="btn btn-primary btn-sm" href="/admin/courses/edit/' . $course->id . '">
                      <i class="fas fa-edit"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" href="#" onclick="removeRow(' . $course->id . ', \'/admin/courses/destroy\')">
                     <i class="fas fa-trash"></i>
                    </a>
                  </td>  
                </tr>';
    }

    return $html;
  }

  public static function user($users)
  {
    $html = '';

    foreach ($users as $key => $user) {
      $html .= '
      <tr>
        <td> ' . $user->id . ' </td>
        <td> ' . $user->name . ' </td>
        <td> ' . $user->email . ' </td>
        <td> ' . 'khoá học' . '</td>
        <td> ' . $user->created_at . ' </td>
        <td> 
          <a class="btn btn-primary btn-sm" href="/admin/user/add/' . $user->id . '">
            <i class="fas fa-edit"></i>
          </a>
        </td>  
      </tr>';
    }

    return $html;
  }
}
