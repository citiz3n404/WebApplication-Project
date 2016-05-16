<?php

/* AnnuaireBundle:Default:profil.html.twig */
class __TwigTemplate_b32c55bef79be04f81425ca9c6e2bf50f141913794e7982fb2a172df7ad19067 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AnnuaireBundle:Default:profil.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_646c39f6ba61f621541efeaf2c9f1b46e7cd5942681dddb965481249aa8f81de = $this->env->getExtension("native_profiler");
        $__internal_646c39f6ba61f621541efeaf2c9f1b46e7cd5942681dddb965481249aa8f81de->enter($__internal_646c39f6ba61f621541efeaf2c9f1b46e7cd5942681dddb965481249aa8f81de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnuaireBundle:Default:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_646c39f6ba61f621541efeaf2c9f1b46e7cd5942681dddb965481249aa8f81de->leave($__internal_646c39f6ba61f621541efeaf2c9f1b46e7cd5942681dddb965481249aa8f81de_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_33bd689d3ad3522ca3f447af25c1e40ade3f52f541a8cd0a61ce5a87093de22d = $this->env->getExtension("native_profiler");
        $__internal_33bd689d3ad3522ca3f447af25c1e40ade3f52f541a8cd0a61ce5a87093de22d->enter($__internal_33bd689d3ad3522ca3f447af25c1e40ade3f52f541a8cd0a61ce5a87093de22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h2 class=\"page-header\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "prenom", array())), "html", null, true);
        // line 4
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "nom", array())), "html", null, true);
        echo "
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 6
            echo "            ";
            if (($context["role"] == "ROLE_ADMIN")) {
                // line 7
                echo "                <span class=\"label label-black\">ADMIN</span>
            ";
            } elseif ((            // line 8
$context["role"] == "ROLE_FORMATEUR")) {
                // line 9
                echo "                <span class=\"label label-warning\">FORMATEUR</span>
            ";
            } elseif ((            // line 10
$context["role"] == "ROLE_MODERATEUR")) {
                // line 11
                echo "                <span class=\"label label-danger\">MODERATEUR</span>
            ";
            } elseif ((            // line 12
$context["role"] == "ROLE_RH")) {
                // line 13
                echo "                <span class=\"label label-success\">RH</span>
            ";
            }
            // line 15
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    </h2>
    <div class=\"row\">
    <div class=\"col-md-3\">
        <div class=\"panel panel-default\">
            <!-- Default panel contents -->
            <div class=\"panel-heading\">Photo</div>
            <img class=\"card-img-top\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("img/users/" . $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "img", array()))), "html", null, true);
        // line 25
        echo "\" alt=\"Card image cap\">

        </div>
    </div>
    <div class=\"col-md-9\">
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
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</th>
                    <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "nom", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "prenom", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "sexe", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "salaire", array()), "html", null, true);
        echo " €</td>
                    <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "typeContrat", array()), "html", null, true);
        echo "</td>
                </tr>
                </tbody>
            </table>
        </div>
        ";
        // line 60
        if (((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || $this->env->getExtension('security')->isGranted("ROLE_RH"))) {
            // line 62
            echo "        <a class=\"btn btn-default\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editprofil", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            // line 63
            echo "\">Editer le
            profil</a>
        <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("payslip", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\"
           style=\"\"><i class=\"fa fa-file-pdf-o\"></i> Fiche de paie</a>
        ";
        }
        // line 68
        echo "    </div>

";
        
        $__internal_33bd689d3ad3522ca3f447af25c1e40ade3f52f541a8cd0a61ce5a87093de22d->leave($__internal_33bd689d3ad3522ca3f447af25c1e40ade3f52f541a8cd0a61ce5a87093de22d_prof);

    }

    public function getTemplateName()
    {
        return "AnnuaireBundle:Default:profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 68,  158 => 65,  154 => 63,  151 => 62,  149 => 60,  141 => 55,  137 => 54,  133 => 53,  129 => 52,  125 => 51,  121 => 50,  117 => 49,  91 => 25,  89 => 23,  80 => 16,  74 => 15,  70 => 13,  68 => 12,  65 => 11,  63 => 10,  60 => 9,  58 => 8,  55 => 7,  52 => 6,  48 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <h2 class="page-header">{{ user.salarie.prenom|capitalize*/
/*         }} {{ user.salarie.nom|upper }}*/
/*         {% for role in user.roles %}*/
/*             {% if role == "ROLE_ADMIN" %}*/
/*                 <span class="label label-black">ADMIN</span>*/
/*             {% elseif role == "ROLE_FORMATEUR" %}*/
/*                 <span class="label label-warning">FORMATEUR</span>*/
/*             {% elseif role == "ROLE_MODERATEUR" %}*/
/*                 <span class="label label-danger">MODERATEUR</span>*/
/*             {% elseif role == "ROLE_RH" %}*/
/*                 <span class="label label-success">RH</span>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/* */
/*     </h2>*/
/*     <div class="row">*/
/*     <div class="col-md-3">*/
/*         <div class="panel panel-default">*/
/*             <!-- Default panel contents -->*/
/*             <div class="panel-heading">Photo</div>*/
/*             <img class="card-img-top" src="{{ asset('img/users/' ~ user*/
/*             .salarie.img )*/
/*             }}" alt="Card image cap">*/
/* */
/*         </div>*/
/*     </div>*/
/*     <div class="col-md-9">*/
/*         <div class="panel panel-primary">*/
/*             <!-- Default panel contents -->*/
/*             <div class="panel-heading">Informations de profil</div>*/
/* */
/*             <!-- Table -->*/
/*             <table class="table table-striped">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>Username</th>*/
/*                     <th>Email</th>*/
/*                     <th>Nom</th>*/
/*                     <th>Prénom</th>*/
/*                     <th>Sexe</th>*/
/*                     <th>Salaire</th>*/
/*                     <th>Contrat</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 <tr>*/
/*                     <th scope="row">{{ user.username }}</th>*/
/*                     <td>{{ user.email }}</td>*/
/*                     <td>{{ user.salarie.nom }}</td>*/
/*                     <td>{{ user.salarie.prenom }}</td>*/
/*                     <td>{{ user.salarie.sexe }}</td>*/
/*                     <td>{{ user.salarie.salaire }} €</td>*/
/*                     <td>{{ user.salarie.typeContrat }}</td>*/
/*                 </tr>*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*         {% if user.username == app.user.username or*/
/*                     is_granted('ROLE_ADMIN') or is_granted('ROLE_RH')%}*/
/*         <a class="btn btn-default" href="{{ path('editprofil', {'id': user.id })*/
/*         }}">Editer le*/
/*             profil</a>*/
/*         <a href="{{path('payslip', {'id': user.id })}}" class="btn btn-danger"*/
/*            style=""><i class="fa fa-file-pdf-o"></i> Fiche de paie</a>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/* {% endblock body %}*/
