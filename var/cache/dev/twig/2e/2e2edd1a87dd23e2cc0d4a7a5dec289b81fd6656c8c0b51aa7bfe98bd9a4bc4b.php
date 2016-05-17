<?php

/* AnnuaireBundle:Default:profil.html.twig */
class __TwigTemplate_bf5aa39d03f217fdc60d9928c8c986b382d6190990d21f347413d18213705206 extends Twig_Template
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
        $__internal_79a8a0f31ed86aadc1e616205ec6a859baa6819e68884b50ba06d23b85b536ea = $this->env->getExtension("native_profiler");
        $__internal_79a8a0f31ed86aadc1e616205ec6a859baa6819e68884b50ba06d23b85b536ea->enter($__internal_79a8a0f31ed86aadc1e616205ec6a859baa6819e68884b50ba06d23b85b536ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnuaireBundle:Default:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79a8a0f31ed86aadc1e616205ec6a859baa6819e68884b50ba06d23b85b536ea->leave($__internal_79a8a0f31ed86aadc1e616205ec6a859baa6819e68884b50ba06d23b85b536ea_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f73ea6ef3e5a469cbc9a6b1aacbc6b4701a77ff3fa084accccf7c4ebef3da34 = $this->env->getExtension("native_profiler");
        $__internal_9f73ea6ef3e5a469cbc9a6b1aacbc6b4701a77ff3fa084accccf7c4ebef3da34->enter($__internal_9f73ea6ef3e5a469cbc9a6b1aacbc6b4701a77ff3fa084accccf7c4ebef3da34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            } elseif ((            // line 14
$context["role"] == "ROLE_GESTIONNAIRE")) {
                // line 15
                echo "                <span class=\"label label-primary\">GESTIONNAIRE</span>
            ";
            }
            // line 17
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
    </h2>
    <div class=\"row\">
    <div class=\"col-md-3\">
        <div class=\"panel panel-default\">
            <!-- Default panel contents -->
            <div class=\"panel-heading\">Photo</div>
            <img class=\"card-img-top\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("img/users/" . $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "img", array()))), "html", null, true);
        // line 27
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
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</th>
                    <td>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "nom", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "prenom", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "sexe", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "salaire", array()), "html", null, true);
        echo " €</td>
                    <td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "typeContrat", array()), "html", null, true);
        echo "</td>
                </tr>
                </tbody>
            </table>
        </div>
        ";
        // line 62
        if (((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || $this->env->getExtension('security')->isGranted("ROLE_RH"))) {
            // line 64
            echo "        <a class=\"btn btn-default\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editprofil", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            // line 65
            echo "\">Editer le
            profil</a>
        <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("payslip", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\"
           style=\"\"><i class=\"fa fa-file-pdf-o\"></i> Fiche de paie</a>
        ";
        }
        // line 70
        echo "    </div>

";
        
        $__internal_9f73ea6ef3e5a469cbc9a6b1aacbc6b4701a77ff3fa084accccf7c4ebef3da34->leave($__internal_9f73ea6ef3e5a469cbc9a6b1aacbc6b4701a77ff3fa084accccf7c4ebef3da34_prof);

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
        return array (  169 => 70,  163 => 67,  159 => 65,  156 => 64,  154 => 62,  146 => 57,  142 => 56,  138 => 55,  134 => 54,  130 => 53,  126 => 52,  122 => 51,  96 => 27,  94 => 25,  85 => 18,  79 => 17,  75 => 15,  73 => 14,  70 => 13,  68 => 12,  65 => 11,  63 => 10,  60 => 9,  58 => 8,  55 => 7,  52 => 6,  48 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
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
/*             {% elseif role == "ROLE_GESTIONNAIRE" %}*/
/*                 <span class="label label-primary">GESTIONNAIRE</span>*/
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
