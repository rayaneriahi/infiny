<?php

require_once 'connect.php';

$insertClient = $db->prepare("INSERT INTO client(last_name, first_name, address, birth_date, phone_number, city, email, register_date, postal_code)
    VALUES (:last_name, :first_name, :address, :birth_date, :phone_number, :city, :email, :register_date, :postal_code)");
$insertClient->execute([
    'last_name' => $_POST['lastName'],
    'first_name' => $_POST['firstName'],
    'address' => $_POST['address'],
    'birth_date' => $_POST['birthDate'],
    'phone_number' => $_POST['phoneNumber'],
    'city' => $_POST['city'],
    'email' => $_POST['email'],
    'register_date' => $_POST['registerDate'],
    'postal_code' => $_POST['postalCode']
]);

$selectClientId = $db->prepare("SELECT id FROM client WHERE last_name = :last_name AND first_name = :first_name AND register_date = :register_date AND phone_number = :phone_number");
$selectClientId->execute([
    'last_name' => $_POST['lastName'],
    'first_name' => $_POST['firstName'],
    'phone_number' => $_POST['phoneNumber'],
    'register_date' => $_POST['registerDate']
]);
$clientId = $selectClientId->fetch(PDO::FETCH_ASSOC);

$insertQuestion1 = $db->prepare("INSERT INTO question_1(client_id, question, answer) VALUES (:client_id, :question, :answer)");
if (is_array($_POST['question1'])) {
    foreach($_POST['question1'] as $answer) {
        $insertQuestion1->execute([
            'client_id' => $clientId['id'],
            'question' => "Comment avez vous connu notre centre ?",
            'answer' => $answer
        ]);   
    } 
} else {
    $insertQuestion1->execute([
        'client_id' => $clientId['id'],
        'question' => "Comment avez vous connu notre centre ?",
        'answer' => $_POST['question1']
    ]);
}

$insertQuestion2 = $db->prepare("INSERT INTO question_2(client_id, question, answer) VALUES (:client_id, :question, :answer)");
if (!empty($_POST['yes'])) {
    $insertQuestion2->execute([
        'client_id' => $clientId['id'],
        'question' => "Avez-vous déja pratique l'épilation définitive ?",
        'answer' => $_POST['yes']
    ]);
    $insertQuestion2->execute([
        'client_id' => $clientId['id'],
        'question' => "Quelle zone ?",
        'answer' => $_POST['zone']
    ]);
    $insertQuestion2->execute([
        'client_id' => $clientId['id'],
        'question' => "Date de la dernière séance ?",
        'answer' => $_POST['SessionDate']
    ]);
    $insertQuestion2->execute([
        'client_id' => $clientId['id'],
        'question' => "Combien de séance ?",
        'answer' => $_POST['howManySession']
    ]);
} else {
    $insertQuestion2->execute([
        'client_id' => $clientId['id'],
        'question' => "Avez-vous déja pratiqué l'épilation définitive ?",
        'answer' => $_POST['no']
    ]);
}

$insertQuestion3 = $db->prepare("INSERT INTO question_3(client_id, question, answer) VALUES (:client_id, :question, :answer)");
if (!empty($_POST['motivationToPractice'])) {
    $insertQuestion3->execute([
        'client_id' => $clientId['id'],
        'question' => "Quelles sont vos motivations à pratiquer une méthode d'épiltion:definitive ?",
        'answer' => $_POST['motivationToPractice']
    ]);
}

$insertQuestion4 = $db->prepare("INSERT INTO question_4(client_id, question, answer) VALUES (:client_id, :question, :answer)");
if (!empty($_POST['question4'])) {
    if (is_array($_POST['question4'])) {
        foreach($_POST['question4'] as $answer) {
            $insertQuestion4->execute([
                'client_id' => $clientId['id'],
                'question' => "Souffrez-vous d'une des pathologies suivantes ?",
                'answer' => $answer
            ]);
        }
    } else {
        $insertQuestion4->execute([
            'client_id' => $clientId['id'],
            'question' => "Souffrez-vous d'une des pathologies suivantes ?",
            'answer' => $_POST['question4']
        ]);
    }
}

$insertQuestion5 = $db->prepare("INSERT INTO question_5(client_id, question, answer) VALUES (:client_id, :question, :answer)");
if (!empty($_POST['question5'])) {
    if (is_array($_POST['question5'])) {
        foreach($_POST['question5'] as $answer) {
            $insertQuestion5->execute([
                'client_id' => $clientId['id'],
                'question' => "Étes-vous enceinte,sous contraception ou avez-vous l'un des dispositifs suivants ?",
                'answer' => $answer
            ]);
        }
    } else {
        $insertQuestion5->execute([
            'client_id' => $clientId['id'],
            'question' => "Souffrez-vous d'une des pathologies suivantes ?",
            'answer' => $_POST['question5']
        ]);
    }
}

$insertQuestion6 = $db->prepare("INSERT INTO question_6(client_id, question, answer) VALUES (:client_id, :question, :answer)");
if (!empty($_POST['checkboxQuestion6'])) {
    if (is_array($_POST['checkboxQuestion6'])) {
        foreach($_POST['checkboxQuestion6'] as $answer) {
            $insertQuestion6->execute([
                'client_id' => $clientId['id'],
                'question' => "Prenez-vous les médicaments suivants ?",
                'answer' => $answer
            ]);
        }
    } else {
        $insertQuestion6->execute([
            'client_id' => $clientId['id'],
            'question' => "Prenez-vous les médicaments suivants ?",
            'answer' => $_POST['checkboxQuestion6']
        ]);
    }
}
if (!empty($_POST['otherMedicines'])) {
    $insertQuestion6->execute([
        'client_id' => $clientId['id'],
        'question' => "Autres :",
        'answer' => $_POST['otherMedicines']
    ]);
}

$insertQuestion7 = $db->prepare("INSERT INTO question_7(client_id, question, answer) VALUES (:client_id, :question, :answer)");
if (!empty($_POST['checkboxQuestion7'])) {
    if (is_array($_POST['checkboxQuestion7'])) {
        foreach($_POST['checkboxQuestion7'] as $answer) {
            $insertQuestion7->execute([
                'client_id' => $clientId['id'],
                'question' => "Avez-vous des allergies ?",
                'answer' => $answer
            ]);
        }
    } else {
        $insertQuestion7->execute([
            'client_id' => $clientId['id'],
            'question' => "Avez-vous des allergies ?",
            'answer' => $_POST['checkboxQuestion7']
        ]);
    }
}
if (!empty($_POST['otherAllergies'])) {
    $insertQuestion7->execute([
        'client_id' => $clientId['id'],
        'question' => "Autres :",
        'answer' => $_POST['otherAllergies']
    ]);
}

?>