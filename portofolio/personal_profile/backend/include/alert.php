<?php
// Start the session
    if (isset($_SESSION['status']) && isset($_SESSION['message'])) {
        $status =  $_SESSION['status'];
        $msg = $_SESSION['message'];
    
    switch ($status) {
        case 200:
            echo "
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                    $msg
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
            ";
            break;

            case 400:
                echo "
                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        $msg
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                ";
                break;
            }
            unset($_SESSION['status']);
            unset($_SESSION['message']);
    }
