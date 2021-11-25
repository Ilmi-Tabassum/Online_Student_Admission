@extends('layouts.master')
@section('content')


    <div class = "row">
        <h1>Emoloyee List</h1>
        <table class="table">
            <table border="1">
                <thead>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>Email</th>
                    <th>Employee</th>
                    <th>Designation</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $table_option = "";
                foreach ($test as $key => $value) {
                    $table_option .= "<tr>";
                    $table_option .= "<td>$value->id</td>";
                    $table_option .= "<td>$value->name</td>";
                    $table_option .= "<td>$value->email</td>";
                    $table_option .= "<td>$value->emp</td>";
                    $table_option .= "<td>$value->designation</td>";

                    $table_option .= "<td><a href='". route('edit', $value->id) ."'>Edit</a>
                     <a href='". route('delete', $value->id) ."'>Delete</a></td>";



                    $table_option .= "</tr>";
                }

                echo $table_option;

                ?>


                </tbody>

            </table>
        </table>
    </div>
