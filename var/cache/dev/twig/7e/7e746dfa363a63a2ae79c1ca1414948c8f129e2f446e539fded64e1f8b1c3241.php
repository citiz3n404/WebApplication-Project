<?php

/* ForumBundle:Default:index.html.twig */
class __TwigTemplate_427dda103da1f967068f4871247b0450f55f296447dcc21f97c620c16dad35eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ForumBundle:Default:index.html.twig", 1);
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
        $__internal_0c8d26a37e2cf46b55e52ec0224052fd0b6f044ce29a5a530e7c77c11f9ac845 = $this->env->getExtension("native_profiler");
        $__internal_0c8d26a37e2cf46b55e52ec0224052fd0b6f044ce29a5a530e7c77c11f9ac845->enter($__internal_0c8d26a37e2cf46b55e52ec0224052fd0b6f044ce29a5a530e7c77c11f9ac845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c8d26a37e2cf46b55e52ec0224052fd0b6f044ce29a5a530e7c77c11f9ac845->leave($__internal_0c8d26a37e2cf46b55e52ec0224052fd0b6f044ce29a5a530e7c77c11f9ac845_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a78895f73fc6e1592057fc7794d39f164d2cc498c801268071df0560779699ff = $this->env->getExtension("native_profiler");
        $__internal_a78895f73fc6e1592057fc7794d39f164d2cc498c801268071df0560779699ff->enter($__internal_a78895f73fc6e1592057fc7794d39f164d2cc498c801268071df0560779699ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ForumBundle
";
        
        $__internal_a78895f73fc6e1592057fc7794d39f164d2cc498c801268071df0560779699ff->leave($__internal_a78895f73fc6e1592057fc7794d39f164d2cc498c801268071df0560779699ff_prof);

    }

    public function getTemplateName()
    {
        return "ForumBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     ForumBundle*/
/* {% endblock %}*/
