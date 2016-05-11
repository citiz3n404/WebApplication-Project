<?php

/* FormationBundle:Default:list.html.twig */
class __TwigTemplate_0c078746ae40171e9489c5d103895f2978aca19c4580fa7c495b6374d9f7c23d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FormationBundle:Default:list.html.twig", 1);
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
        $__internal_39ee6414e58dda3dbef721fffdb89a5813986a3bf3788a5056146e797039257b = $this->env->getExtension("native_profiler");
        $__internal_39ee6414e58dda3dbef721fffdb89a5813986a3bf3788a5056146e797039257b->enter($__internal_39ee6414e58dda3dbef721fffdb89a5813986a3bf3788a5056146e797039257b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormationBundle:Default:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39ee6414e58dda3dbef721fffdb89a5813986a3bf3788a5056146e797039257b->leave($__internal_39ee6414e58dda3dbef721fffdb89a5813986a3bf3788a5056146e797039257b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_78fe85cbc04057f2a2f2b1552294b041c5e17805421e3125166c0bf1caeb2f8f = $this->env->getExtension("native_profiler");
        $__internal_78fe85cbc04057f2a2f2b1552294b041c5e17805421e3125166c0bf1caeb2f8f->enter($__internal_78fe85cbc04057f2a2f2b1552294b041c5e17805421e3125166c0bf1caeb2f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h2 class=\"page-header\">FORMATIONS</h2>
    <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("formationcreate");
        echo "\"
       class=\"btn btn-success\">Create a new formation</a>
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>#</th>
            <th>Formation</th>
            <th>Durée</th>
            <th>Prix</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 18
            echo "            <tr>
                <th scope=\"row\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "id", array()), "html", null, true);
            echo "</th>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationdetails", array("id" => $this->getAttribute($context["formation"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute(            // line 21
$context["formation"], "title", array()), "html", null, true);
            // line 22
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "duration", array()), "html", null, true);
            echo " jours</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "cost", array()), "html", null, true);
            echo " euros</td>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationdetails", array("id" => $this->getAttribute($context["formation"], "id", array()))), "html", null, true);
            echo "\"
                       class=\"btn btn-success\">Details</a>
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationedit", array("id" => $this->getAttribute($context["formation"], "id", array()))), "html", null, true);
            echo "\"
                       class=\"btn
                btn-default\">Edit</a>
                    <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationlock", array("id" => $this->getAttribute($context["formation"], "id", array()))), "html", null, true);
            // line 31
            echo "\" class=\"btn
                btn-warning\">Lock</a>
                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationremove", array("id" => $this->getAttribute($context["formation"], "id", array()))), "html", null, true);
            // line 34
            echo "\" class=\"btn
                btn-danger\">Remove</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>
";
        
        $__internal_78fe85cbc04057f2a2f2b1552294b041c5e17805421e3125166c0bf1caeb2f8f->leave($__internal_78fe85cbc04057f2a2f2b1552294b041c5e17805421e3125166c0bf1caeb2f8f_prof);

    }

    public function getTemplateName()
    {
        return "FormationBundle:Default:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 39,  105 => 34,  103 => 33,  99 => 31,  97 => 30,  91 => 27,  86 => 25,  82 => 24,  78 => 23,  75 => 22,  73 => 21,  70 => 20,  66 => 19,  63 => 18,  59 => 17,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <h2 class="page-header">FORMATIONS</h2>*/
/*     <a href="{{ path('formationcreate') }}"*/
/*        class="btn btn-success">Create a new formation</a>*/
/*     <table class="table table-striped">*/
/*         <thead>*/
/*         <tr>*/
/*             <th>#</th>*/
/*             <th>Formation</th>*/
/*             <th>Durée</th>*/
/*             <th>Prix</th>*/
/*             <th>Action</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for formation in formations %}*/
/*             <tr>*/
/*                 <th scope="row">{{ formation.id }}</th>*/
/*                 <td><a href="{{ path('formationdetails', {'id': formation.id}) }}"> {{*/
/*                         formation.title*/
/*                         }}</a></td>*/
/*                 <td>{{ formation.duration }} jours</td>*/
/*                 <td>{{ formation.cost }} euros</td>*/
/*                 <td><a href="{{ path('formationdetails', {'id': formation.id}) }}"*/
/*                        class="btn btn-success">Details</a>*/
/*                     <a href="{{ path('formationedit', {'id': formation.id}) }}"*/
/*                        class="btn*/
/*                 btn-default">Edit</a>*/
/*                     <a href="{{ path('formationlock', {'id': formation.id})*/
/*                     }}" class="btn*/
/*                 btn-warning">Lock</a>*/
/*                     <a href="{{ path('formationremove', {'id': formation.id})*/
/*                     }}" class="btn*/
/*                 btn-danger">Remove</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
