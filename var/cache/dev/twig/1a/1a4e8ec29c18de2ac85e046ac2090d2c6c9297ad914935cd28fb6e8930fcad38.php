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
        $__internal_70833b2c1bc571798e50551c7bece680f03c1cc1c5de0fad3da033fe5d4ceff9 = $this->env->getExtension("native_profiler");
        $__internal_70833b2c1bc571798e50551c7bece680f03c1cc1c5de0fad3da033fe5d4ceff9->enter($__internal_70833b2c1bc571798e50551c7bece680f03c1cc1c5de0fad3da033fe5d4ceff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnuaireBundle:Default:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70833b2c1bc571798e50551c7bece680f03c1cc1c5de0fad3da033fe5d4ceff9->leave($__internal_70833b2c1bc571798e50551c7bece680f03c1cc1c5de0fad3da033fe5d4ceff9_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_05a6877f3b8c2a7edee05bc351854f1d02d7b205616d1bbdf57f4dd94157d46e = $this->env->getExtension("native_profiler");
        $__internal_05a6877f3b8c2a7edee05bc351854f1d02d7b205616d1bbdf57f4dd94157d46e->enter($__internal_05a6877f3b8c2a7edee05bc351854f1d02d7b205616d1bbdf57f4dd94157d46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h2 class=\"page-header\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "prenom", array())), "html", null, true);
        // line 4
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "nom", array())), "html", null, true);
        echo " <span class=\"label
        label-info\">";
        // line 5
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array()), " | "), "html", null, true);
        echo "</span></h2>

    <div class=\"row\">
    <div class=\"col-md-3\">
        <div class=\"panel panel-default\">
            <!-- Default panel contents -->
            <div class=\"panel-heading\">Photo</div>
            <img class=\"card-img-top\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("img/users/" . $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "img", array()))), "html", null, true);
        // line 14
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
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</th>
                    <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "nom", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "prenom", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "sexe", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "salaire", array()), "html", null, true);
        echo " €</td>
                    <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "typeContrat", array()), "html", null, true);
        echo "</td>
                </tr>
                </tbody>
            </table>
        </div>
        ";
        // line 49
        if (((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || $this->env->getExtension('security')->isGranted("ROLE_RH"))) {
            // line 51
            echo "        <a class=\"btn btn-default\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editprofil", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            // line 52
            echo "\">Editer le
            profil</a>
        <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("payslip", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"
           style=\"\"><i class=\"glyphicon glyphicon-download-alt\"></i> Fiche de paie</a>
        ";
        }
        // line 57
        echo "    </div>

";
        
        $__internal_05a6877f3b8c2a7edee05bc351854f1d02d7b205616d1bbdf57f4dd94157d46e->leave($__internal_05a6877f3b8c2a7edee05bc351854f1d02d7b205616d1bbdf57f4dd94157d46e_prof);

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
        return array (  133 => 57,  127 => 54,  123 => 52,  120 => 51,  118 => 49,  110 => 44,  106 => 43,  102 => 42,  98 => 41,  94 => 40,  90 => 39,  86 => 38,  60 => 14,  58 => 12,  48 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <h2 class="page-header">{{ user.salarie.prenom|capitalize*/
/*         }} {{ user.salarie.nom|upper }} <span class="label*/
/*         label-info">{{ user.roles|join(' | ') }}</span></h2>*/
/* */
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
/*         <a href="{{path('payslip', {'id': user.id })}}" class="btn btn-primary"*/
/*            style=""><i class="glyphicon glyphicon-download-alt"></i> Fiche de paie</a>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/* {% endblock body %}*/
