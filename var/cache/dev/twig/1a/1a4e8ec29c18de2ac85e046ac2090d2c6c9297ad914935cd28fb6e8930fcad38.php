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
        $__internal_3eec288715f15d50a7ed7744b8ccefbf66043177592973d8017dc3ce2926dc07 = $this->env->getExtension("native_profiler");
        $__internal_3eec288715f15d50a7ed7744b8ccefbf66043177592973d8017dc3ce2926dc07->enter($__internal_3eec288715f15d50a7ed7744b8ccefbf66043177592973d8017dc3ce2926dc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnuaireBundle:Default:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3eec288715f15d50a7ed7744b8ccefbf66043177592973d8017dc3ce2926dc07->leave($__internal_3eec288715f15d50a7ed7744b8ccefbf66043177592973d8017dc3ce2926dc07_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a53e99308f4fe6aed06d566671946ba1f6dd595c37ab1b303525cd310295901 = $this->env->getExtension("native_profiler");
        $__internal_5a53e99308f4fe6aed06d566671946ba1f6dd595c37ab1b303525cd310295901->enter($__internal_5a53e99308f4fe6aed06d566671946ba1f6dd595c37ab1b303525cd310295901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h2 class=\"page-header\">";
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
        
        $__internal_5a53e99308f4fe6aed06d566671946ba1f6dd595c37ab1b303525cd310295901->leave($__internal_5a53e99308f4fe6aed06d566671946ba1f6dd595c37ab1b303525cd310295901_prof);

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
        return array (  96 => 32,  92 => 31,  88 => 30,  84 => 29,  80 => 28,  76 => 27,  72 => 26,  48 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <h2 class="page-header">{{ user.salarie.prenom|capitalize*/
/*         }} {{ user.salarie.nom|upper }} <span class="label*/
/*         label-info">{{ user.salarie.typeContrat }}</span></h2>*/
/* */
/*     <div class="panel panel-primary">*/
/*         <!-- Default panel contents -->*/
/*         <div class="panel-heading">Informations de profil</div>*/
/* */
/*         <!-- Table -->*/
/*         <table class="table table-striped">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>Username</th>*/
/*                 <th>Email</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Prénom</th>*/
/*                 <th>Sexe</th>*/
/*                 <th>Salaire</th>*/
/*                 <th>Contrat</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             <tr>*/
/*                 <th scope="row">{{ user.username }}</th>*/
/*                 <td>{{ user.email }}</td>*/
/*                 <td>{{ user.salarie.nom }}</td>*/
/*                 <td>{{ user.salarie.prenom }}</td>*/
/*                 <td>{{ user.salarie.sexe }}</td>*/
/*                 <td>{{ user.salarie.salaire }} €</td>*/
/*                 <td>{{ user.salarie.typeContrat }}</td>*/
/*             </tr>*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* {% endblock body %}*/
