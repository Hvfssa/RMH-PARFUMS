<?php
function formValidator($array)
    {
        $userPtrn = "/^[a-zA-ZÀ-ÿ]+$/";
        $passPtrn = "/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z])().{0,}$/";
        $formErrors = [];
        foreach ($array as $cle => $valeur) {
            if ($cle === "fullname") {
                if (empty(trim($valeur)) || strlen($valeur) < 2 || strlen($valeur) > 25 || !preg_match($userPtrn, trim($valeur))) {
                    $formErrors[$cle] = TRUE;
                }
            }
            else {
                if ($cle === "email") {
                    if (!filter_var($valeur, FILTER_VALIDATE_EMAIL)) {
                        $formErrors[$cle] = TRUE;
                    }
                }
                if (strlen($valeur) < 8 && !preg_match($passPtrn, $valeur)) {
                    $formErrors[$cle] = TRUE;
                }
                if ($cle === "link1" || $cle === "link2" || $cle === "link3") {
                    if (!filter_var($valeur, FILTER_VALIDATE_URL)) {
                        $formErrors[$cle] = TRUE;
                    }
                }
            }
        }
        if (!empty($_FILES)) {
            $tempPath = $_FILES["img"]["tmp_name"];
            $definitivePath = './uploads/' . basename($_FILES["img"]["name"]);
            if (exif_imagetype($tempPath) != IMAGETYPE_JPEG) {
                $formErrors["img"] = TRUE;
            } else {
                move_uploaded_file($tempPath, $definitivePath);
            }
        }
        return $formErrors;
    }
?>