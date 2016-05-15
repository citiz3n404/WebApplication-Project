<?php

/* AnnuaireBundle:Default:index.html.twig */
class __TwigTemplate_7d154de4861acdce2770ee65eeeaf2f1662f5d833be92950ac3ed3f13a68e43a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AnnuaireBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3608fc6c74e03cbc4ea478a1261ca9cebdf972aee48b3f89a28fb4d15d022ba4 = $this->env->getExtension("native_profiler");
        $__internal_3608fc6c74e03cbc4ea478a1261ca9cebdf972aee48b3f89a28fb4d15d022ba4->enter($__internal_3608fc6c74e03cbc4ea478a1261ca9cebdf972aee48b3f89a28fb4d15d022ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnuaireBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3608fc6c74e03cbc4ea478a1261ca9cebdf972aee48b3f89a28fb4d15d022ba4->leave($__internal_3608fc6c74e03cbc4ea478a1261ca9cebdf972aee48b3f89a28fb4d15d022ba4_prof);

    }

    // line 2
    public function block_breadcrumbs($context, array $blocks = array())
    {
        $__internal_6a256de5a7109540af64ea936ca147e27e412a02167677fe662201fcba935fe9 = $this->env->getExtension("native_profiler");
        $__internal_6a256de5a7109540af64ea936ca147e27e412a02167677fe662201fcba935fe9->enter($__internal_6a256de5a7109540af64ea936ca147e27e412a02167677fe662201fcba935fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 3
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
    <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("annuaireempty");
        echo "\">Annuaire</a></li>
";
        
        $__internal_6a256de5a7109540af64ea936ca147e27e412a02167677fe662201fcba935fe9->leave($__internal_6a256de5a7109540af64ea936ca147e27e412a02167677fe662201fcba935fe9_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_da44a08da4f5055b96b0a67a4769ff35a3fb7de8c030184ae2c695f0eaea5fa5 = $this->env->getExtension("native_profiler");
        $__internal_da44a08da4f5055b96b0a67a4769ff35a3fb7de8c030184ae2c695f0eaea5fa5->enter($__internal_da44a08da4f5055b96b0a67a4769ff35a3fb7de8c030184ae2c695f0eaea5fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h2 class=\"page-header\">ANNUAIRE</h2>

    <div class=\"panel panel-default\">
    <!-- Default panel contents -->
    <div class=\"panel-heading\">Annuaire</div>
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>Photo</th>
            <th>Username</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Sexe</th>
            <th>Salaire</th>
            <th>Contrat</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 27
            echo "            <tr>
                <th><div class=\"littleImg\"><img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("img/users/" . $this->getAttribute($this->getAttribute(            // line 29
$context["user"], "salarie", array()), "img", array()))), "html", null, true);
            echo "\"
                                                                alt=\"photo\"></div></th>
                <th scope=\"row\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</th>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "sexe", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "salaire", array()), "html", null, true);
            echo " €</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "typeContrat", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profiluser", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\"
                       class=\"btn
                btn-info btn-sm\">Details</a>
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editprofil", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\"
                       class=\"btn
                    btn-default
                    btn-sm\">Edit</a>
                    <a href=\"\" class=\"btn  btn-danger btn-sm\">Remove</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>
</div>
    <nav>
        <ul class=\"pagination\">
            <li
                ";
        // line 54
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == 1)) {
            // line 55
            echo "                    class=\"disabled\"
                ";
        }
        // line 57
        echo "            >
                <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1))), "html", null, true);
        echo "\"
                   aria-label=\"Previous\"
                >
                    <span aria-hidden=\"true\">&laquo;</span>
                </a>
            </li>
            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["maxpage"]) ? $context["maxpage"] : $this->getContext($context, "maxpage"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 65
            echo "                ";
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == $context["i"])) {
                // line 66
                echo "                    <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire", array("page" => $context["i"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                // line 67
                echo "</a></li>
                ";
            } else {
                // line 69
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire", array("page" => $context["i"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "<span class=\"sr-only\">(current) </span></a></li>
                ";
            }
            // line 71
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "            <li
                ";
        // line 73
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == (isset($context["maxpage"]) ? $context["maxpage"] : $this->getContext($context, "maxpage")))) {
            // line 74
            echo "                    class=\"disabled\"
                ";
        }
        // line 76
        echo "            >
                <a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1))), "html", null, true);
        echo "\"
                   aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
";
        
        $__internal_da44a08da4f5055b96b0a67a4769ff35a3fb7de8c030184ae2c695f0eaea5fa5->leave($__internal_da44a08da4f5055b96b0a67a4769ff35a3fb7de8c030184ae2c695f0eaea5fa5_prof);

    }

    public function getTemplateName()
    {
        return "AnnuaireBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 77,  204 => 76,  200 => 74,  198 => 73,  195 => 72,  189 => 71,  181 => 69,  177 => 67,  172 => 66,  169 => 65,  165 => 64,  156 => 58,  153 => 57,  149 => 55,  147 => 54,  139 => 48,  125 => 40,  119 => 37,  115 => 36,  111 => 35,  107 => 34,  103 => 33,  99 => 32,  95 => 31,  90 => 29,  89 => 28,  86 => 27,  82 => 26,  61 => 7,  55 => 6,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block breadcrumbs %}*/
/*     {{ parent() }}*/
/*     <li><a href="{{ path('annuaireempty') }}">Annuaire</a></li>*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <h2 class="page-header">ANNUAIRE</h2>*/
/* */
/*     <div class="panel panel-default">*/
/*     <!-- Default panel contents -->*/
/*     <div class="panel-heading">Annuaire</div>*/
/*     <table class="table table-striped">*/
/*         <thead>*/
/*         <tr>*/
/*             <th>Photo</th>*/
/*             <th>Username</th>*/
/*             <th>Nom</th>*/
/*             <th>Prénom</th>*/
/*             <th>Sexe</th>*/
/*             <th>Salaire</th>*/
/*             <th>Contrat</th>*/
/*             <th>Action</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for user in users %}*/
/*             <tr>*/
/*                 <th><div class="littleImg"><img src="{{ asset*/
/*                         ('img/users/' ~ user.salarie.img ) }}"*/
/*                                                                 alt="photo"></div></th>*/
/*                 <th scope="row">{{ user.username }}</th>*/
/*                 <td>{{ user.salarie.nom }}</td>*/
/*                 <td>{{ user.salarie.prenom }}</td>*/
/*                 <td>{{ user.salarie.sexe }}</td>*/
/*                 <td>{{ user.salarie.salaire }} €</td>*/
/*                 <td>{{ user.salarie.typeContrat }}</td>*/
/*                 <td><a href="{{ path('profiluser', {'id': user.id}) }}"*/
/*                        class="btn*/
/*                 btn-info btn-sm">Details</a>*/
/*                     <a href="{{ path('editprofil', {'id': user.id}) }}"*/
/*                        class="btn*/
/*                     btn-default*/
/*                     btn-sm">Edit</a>*/
/*                     <a href="" class="btn  btn-danger btn-sm">Remove</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
/*     <nav>*/
/*         <ul class="pagination">*/
/*             <li*/
/*                 {% if page == 1 %}*/
/*                     class="disabled"*/
/*                 {% endif %}*/
/*             >*/
/*                 <a href="{{ path('annuaire', {'page': page-1}) }}"*/
/*                    aria-label="Previous"*/
/*                 >*/
/*                     <span aria-hidden="true">&laquo;</span>*/
/*                 </a>*/
/*             </li>*/
/*             {% for i in 1..maxpage %}*/
/*                 {% if page == i %}*/
/*                     <li class="active"><a href="{{ path('annuaire', {'page': i}) }}">{{ i*/
/*                             }}</a></li>*/
/*                 {% else %}*/
/*                     <li><a href="{{ path('annuaire', {'page': i}) }}">{{ i }}<span class="sr-only">(current) </span></a></li>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*             <li*/
/*                 {% if page == maxpage %}*/
/*                     class="disabled"*/
/*                 {% endif %}*/
/*             >*/
/*                 <a href="{{ path('annuaire', {'page': page+1}) }}"*/
/*                    aria-label="Next">*/
/*                     <span aria-hidden="true">&raquo;</span>*/
/*                 </a>*/
/*             </li>*/
/*         </ul>*/
/*     </nav>*/
/* {% endblock %}*/
