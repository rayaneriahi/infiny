<h1>Information Client</h1>

<form action="pdo/insert-form.php" method="post">

<!-- Info Client -->
<div>
    <span>Nom :</span>
    <input type="text" name="lastName" required>

    <span>Prénom :</span>
    <input type="text" name="firstName" required>

    <span>Date</span>
    <input type="date" name="registerDate" required>

    <span>Adresse :</span>
    <input type="text" name="address">

    <span>Code postal :</span>
    <input type="text" name="postalCode" required>

    <span>Date de naissance :</span>
    <input type="date" name="birthDate" required>

    <span>téléphone :</span>
    <input type="phone" name="phoneNumber" required>
    
    <span>email :</span>
    <input type="email" name="email" required>

    <span>ville :</span>
    <input type="text" name="city" required>
</div>

<!-- Question 1 -->
<div>
    <h2>Comment avez vous connu notre centre ?</h2>

    <input type="checkbox" name="question1[]" value="Site internet" class="checkboxQuestion1" required>
    <span>Site Internet</span>

    <input type="checkbox" name="question1[]" value="Amie(e)/ famille" class="checkboxQuestion1" required>
    <span>Ami(e)/ famille</span>
    
    <input type="checkbox" name="question1[]" value="Pub/ Presse" class="checkboxQuestion1" required>
    <span>Pub/ Presse</span>

    <input type="checkbox" name="question1[]" value="Autre" class="checkboxQuestion1" required>
    <span>Autre</span>

    <input type="checkbox" name="question1[]" value="Réseaux sociaux" class="checkboxQuestion1" required>
    <span>Réseaux sociaux</span>

    <input type="checkbox" name="question1[]" value="Parrainage" class="checkboxQuestion1" required>
    <span>Parrainage</span>

    <input type="checkbox" name="question1[]" value="Passage Boutique" class="checkboxQuestion1" required>
    <span>Passage Boutique</span>
</div>

<!-- Question 2 -->
<div>
    <h2>Avez-vous déja pratiqué l'épilation définitive ?</h2>

    <input type="checkbox" name="yes" value="Oui" class="checkboxQuestion2" required>
    <span>Oui</span>

    <input type="checkbox" name="no" value="Non" class="checkboxQuestion2" required>
    <span>Non</span>

    <span>Si oui préciser :</span>

    <span>Quelle zone ?</span>
    <input type="text" name="zone" class="otherInputQuestion2" disabled>

    <span>Date de la dernière séance ?</span>
    <input type="date" name="SessionDate" class="otherInputQuestion2" disabled>

    <span>Combien de séance ?</span>
    <input type="number" name="howManySession" class="otherInputQuestion2" disabled>

    <span>Êtes vous satisfait(e) du résultat ?</span>
    <input type="text" name="areYouSatisfied" class="otherInputQuestion2" disabled>
</div>

<!-- Question 3 -->
<div>
    <h2>Quelles sont vos motivations à pratiquer une méthode d'épiltion définitive ?</h2>

    <textarea name="motivationToPractice" rows="4" cols="50"></textarea>
</div>

<h1>Information de contre-indications</h1>

<!-- Question 4 -->
<div>
    <h2>Souffrez-vous d'une des pathologies suivantes ?</h2>

    <input type="checkbox" name="question4[]" value="Hémophilie">
    <span>Hémophilie</span>

    <input type="checkbox" name="question4[]" value="Hépatite">
    <span>Hépatite</span>

    <input type="checkbox" name="question4[]" value="Déficience sensorielle">
    <span>Déficience sensorielle</span>

    <input type="checkbox" name="question4[]" value="Déficience circulatoire">
    <span>Déficience circulatoire</span>

    <input type="checkbox" name="question4[]" value="Épilepsie">
    <span>Épilepsie</span>

    <input type="checkbox" name="question4[]" value="VIH">
    <span>VIH</span>
    
    <input type="checkbox" name="question4[]" value="Maladies de la peau">
    <span>Maladies de la peau</span>

    <input type="checkbox" name="question4[]" value="Diabète sévère insulinodépendant">
    <span>Diabète sévère insulinodépendant</span>
</div>

<!-- Question 5 -->
<div>
    <h2>Étes-vous enceinte,sous contraception ou avez-vous l'un des dispositifs suivants ?</h2>

    <input type="checkbox" name="question5[]" value="Grossesse">
    <span>Grossesse</span>

    <input type="checkbox" name="question5[]" value="Contraception">
    <span>Contraception</span>

    <input type="checkbox" name="question5[]" value="Implants métaliques">
    <span>Implants métaliques</span>

    <input type="checkbox" name="question5[]" value="Stimulateur cardiaque">
    <span>Stimulateur cardiaque</span>
</div>

<!-- Question 6 -->
<div>
    <h2>Prenez-vous les médicaments suivants ?</h2>

    <input type="checkbox" name="checkboxQuestion6[]" value="Cortisone">
    <span>Cortisone</span>

    <input type="checkbox" name="checkboxQuestion6[]" value="Anticoagulant">
    <span>Anticoagulant</span>

    <input type="checkbox" name="checkboxQuestion6[]" value="Traitement hormonal">
    <span>Traitement hormonal</span>

    <span>Autres :</span>
    <input type="text" name="otherMedicines">
</div>

<!-- Question 7 -->
<div>
    <h2>Avez-vous des allergies ?</h2>

    <input type="checkbox" name="checkboxQuestion7[]" value="Latex">
    <span>Latex</span>

    <input type="checkbox" name="checkboxQuestion7[]" value="Métal">
    <span>Métal</span>

    <input type="checkbox" name="checkboxQuestion7[]" value="Produits cosmétiques">
    <span>Produits cosmétiques</span>
    
    <span>Autres :</span>
    <input type="text" name="otherAllergies">
</div>

<button type="submit">Soumettre</buttontype>

</form>

<script src="form.js"></script>