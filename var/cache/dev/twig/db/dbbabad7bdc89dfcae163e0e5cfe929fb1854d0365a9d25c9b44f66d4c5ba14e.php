<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_5b0a20a776590d8149cc7ebf24f2ba93bcd25b2e43fd16e0bb063b69ff462235 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AdminBundle:Default:index.html.twig", 1);
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
        $__internal_d8e43bc93ca7db188d9d0a43299d17ad0b8349dd350ee7fc7c92ee20808842e1 = $this->env->getExtension("native_profiler");
        $__internal_d8e43bc93ca7db188d9d0a43299d17ad0b8349dd350ee7fc7c92ee20808842e1->enter($__internal_d8e43bc93ca7db188d9d0a43299d17ad0b8349dd350ee7fc7c92ee20808842e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8e43bc93ca7db188d9d0a43299d17ad0b8349dd350ee7fc7c92ee20808842e1->leave($__internal_d8e43bc93ca7db188d9d0a43299d17ad0b8349dd350ee7fc7c92ee20808842e1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0ed35cc7f1bdcfec30f857db1bef35a9d604a597303d3ecb9e75673133c4da7 = $this->env->getExtension("native_profiler");
        $__internal_a0ed35cc7f1bdcfec30f857db1bef35a9d604a597303d3ecb9e75673133c4da7->enter($__internal_a0ed35cc7f1bdcfec30f857db1bef35a9d604a597303d3ecb9e75673133c4da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    AdminBundle
";
        
        $__internal_a0ed35cc7f1bdcfec30f857db1bef35a9d604a597303d3ecb9e75673133c4da7->leave($__internal_a0ed35cc7f1bdcfec30f857db1bef35a9d604a597303d3ecb9e75673133c4da7_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index.html.twig";
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
/*     AdminBundle*/
/* {% endblock %}*/
/* */
