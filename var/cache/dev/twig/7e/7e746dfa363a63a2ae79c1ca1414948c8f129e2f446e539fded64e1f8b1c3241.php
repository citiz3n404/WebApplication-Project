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
        $__internal_ecaaa3b70c1e47fee239b427e9c1877e92584c8615fe62fb0d69832f2010951e = $this->env->getExtension("native_profiler");
        $__internal_ecaaa3b70c1e47fee239b427e9c1877e92584c8615fe62fb0d69832f2010951e->enter($__internal_ecaaa3b70c1e47fee239b427e9c1877e92584c8615fe62fb0d69832f2010951e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecaaa3b70c1e47fee239b427e9c1877e92584c8615fe62fb0d69832f2010951e->leave($__internal_ecaaa3b70c1e47fee239b427e9c1877e92584c8615fe62fb0d69832f2010951e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d47a6997fbcf6269402c4a3d6eea6d23ccc64b6c76223708ae1d82035d3f6ce = $this->env->getExtension("native_profiler");
        $__internal_2d47a6997fbcf6269402c4a3d6eea6d23ccc64b6c76223708ae1d82035d3f6ce->enter($__internal_2d47a6997fbcf6269402c4a3d6eea6d23ccc64b6c76223708ae1d82035d3f6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ForumBundle
";
        
        $__internal_2d47a6997fbcf6269402c4a3d6eea6d23ccc64b6c76223708ae1d82035d3f6ce->leave($__internal_2d47a6997fbcf6269402c4a3d6eea6d23ccc64b6c76223708ae1d82035d3f6ce_prof);

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
