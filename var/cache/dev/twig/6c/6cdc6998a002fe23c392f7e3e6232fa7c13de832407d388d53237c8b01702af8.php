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
        $__internal_31e3d485f406b903181a04e9379e9e6cf08e4fa234f33ed2288d21f4355e9906 = $this->env->getExtension("native_profiler");
        $__internal_31e3d485f406b903181a04e9379e9e6cf08e4fa234f33ed2288d21f4355e9906->enter($__internal_31e3d485f406b903181a04e9379e9e6cf08e4fa234f33ed2288d21f4355e9906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormationBundle:Default:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31e3d485f406b903181a04e9379e9e6cf08e4fa234f33ed2288d21f4355e9906->leave($__internal_31e3d485f406b903181a04e9379e9e6cf08e4fa234f33ed2288d21f4355e9906_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3fc5489d3574fc527ed19bc63abc5242624a83da77517ec6c897eb323c59f5e = $this->env->getExtension("native_profiler");
        $__internal_b3fc5489d3574fc527ed19bc63abc5242624a83da77517ec6c897eb323c59f5e->enter($__internal_b3fc5489d3574fc527ed19bc63abc5242624a83da77517ec6c897eb323c59f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <ul>
       ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 6
            echo "           <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "title", array()), "html", null, true);
            echo " id:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "id", array()), "html", null, true);
            echo "</li>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </ul>
";
        
        $__internal_b3fc5489d3574fc527ed19bc63abc5242624a83da77517ec6c897eb323c59f5e->leave($__internal_b3fc5489d3574fc527ed19bc63abc5242624a83da77517ec6c897eb323c59f5e_prof);

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
        return array (  58 => 8,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <ul>*/
/*        {% for formation in formations %}*/
/*            <li>{{ formation.title }} id:{{ formation.id }}</li>*/
/*        {% endfor %}*/
/*     </ul>*/
/* {% endblock %}*/
