<?php
/*Créer une classe nommée Form représentant un formulaire HTML. Le constructeur doit créer
le code d’en-tête du formulaire en utilisant les éléments <form> et <fieldset>.
Une méthode setText() doit permettre d’ajouter une zone de texte.
Une méthode setSubmit() doit permettre d’ajouter un bouton d’envoi.
Les paramètres de ces méthodes doivent correspondre aux attributs des éléments HTML correspondants.
La méthode getForm() doit retourner tout le code HTML de création du formulaire.
Créer des objets Form et y ajouter deux zones de texte et un bouton d’envoi.
Tester l’affichage obtenu.
*/
class Form
{
    private $enTete;
    private $champsTextuel;
    private $submit;

    //Dans le constructeur on vient créer l'en-tete qui va ouvrir le fieldset et le form
    public function __construct()
    {
        $this->enTete ="<form><fieldset>";
        $this->champsTextuel = "";
        $this->submit = "";
    }

    //On appele l'entete qui vient ouvirr les balises. Ensuite on rajoute le champ textuel. Puis getForm ferme le formulaire.
    public function getForm():string{
        return $this->enTete
            .$this->champsTextuel
            .$this->submit
            ."</fieldset></form>";
    }

    //Création du setText avec les attribut HTML d'un input text, on les met par defaut vide. Cela evite de devoir tous les rentrer quand on appelera la methode
    // .= car on peut en faire plusieurs
    public function setText($id = '', $name = '', $value = '', $minlength = '', $maxlength = '') {
        $this->champsTextuel .= "<input type=\"text\" 
                                    id=\"$id\" 
                                    name=\"$name\" 
                                    value=\"$value\"
                                    minlength=\"$minlength\"
                                    maxlength=\"$maxlength\"
                                ><br/>";
        // alternative
        //$this->champTextuel = "<input type=\"text\" id=\"$id\" [...]";
        //$this->champTextuel = '<input type="text" id="' . $id . '" [...]';
    }

    public function setSubmit($value, $id = '', $formmethod = '', $formtarget = '') {
        $this->submit = "<input type=\"submit\" 
                                    id=\"$id\"
                                    value=\"$value\"
                                    formmethod=\"$formmethod\"
                                    formtarget=\"$formtarget\"
                                ><br/>";
    }


}