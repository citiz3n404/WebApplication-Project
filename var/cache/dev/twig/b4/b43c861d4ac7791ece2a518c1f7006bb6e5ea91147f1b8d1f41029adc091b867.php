<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_c010bd7fb688dbb6286591bf3d45274a9e651de139db8eea4d2bb39825304119 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_809f65bad638115249f3e2743eb3b7bab6825a9eae304cc6012b0fbcee65f1a7 = $this->env->getExtension("native_profiler");
        $__internal_809f65bad638115249f3e2743eb3b7bab6825a9eae304cc6012b0fbcee65f1a7->enter($__internal_809f65bad638115249f3e2743eb3b7bab6825a9eae304cc6012b0fbcee65f1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<h2 class=\"page-header\">";
        // line 3
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "prenom", array())), "html", null, true);
        // line 4
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "nom", array())), "html", null, true);
        echo " <span class=\"label
    label-info\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "typeContrat", array()), "html", null, true);
        echo "</span></h2>

<div class=\"panel panel-primary\">
    <!-- Default panel contents -->
    <div class=\"panel-heading\">Informations de profil</div>

    <!-- Table -->
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Sexe</th>
            <th>Salaire</th>
            <th>Contrat</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <th scope=\"row\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "nom", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "prenom", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "sexe", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "salaire", array()), "html", null, true);
        echo " €</td>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "typeContrat", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
</div>
";
        
        $__internal_809f65bad638115249f3e2743eb3b7bab6825a9eae304cc6012b0fbcee65f1a7->leave($__internal_809f65bad638115249f3e2743eb3b7bab6825a9eae304cc6012b0fbcee65f1a7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 32,  76 => 31,  72 => 30,  68 => 29,  64 => 28,  60 => 27,  56 => 26,  32 => 5,  27 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <h2 class="page-header">{{ user.salarie.prenom|capitalize*/
/*     }} {{ user.salarie.nom|upper }} <span class="label*/
/*     label-info">{{ user.salarie.typeContrat }}</span></h2>*/
/* */
/* <div class="panel panel-primary">*/
/*     <!-- Default panel contents -->*/
/*     <div class="panel-heading">Informations de profil</div>*/
/* */
/*     <!-- Table -->*/
/*     <table class="table table-striped">*/
/*         <thead>*/
/*         <tr>*/
/*             <th>Username</th>*/
/*             <th>Email</th>*/
/*             <th>Nom</th>*/
/*             <th>Prénom</th>*/
/*             <th>Sexe</th>*/
/*             <th>Salaire</th>*/
/*             <th>Contrat</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th scope="row">{{ user.username }}</th>*/
/*                 <td>{{ user.email }}</td>*/
/*                 <td>{{ user.salarie.nom }}</td>*/
/*                 <td>{{ user.salarie.prenom }}</td>*/
/*                 <td>{{ user.salarie.sexe }}</td>*/
/*                 <td>{{ user.salarie.salaire }} €</td>*/
/*                 <td>{{ user.salarie.typeContrat }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
/* */
