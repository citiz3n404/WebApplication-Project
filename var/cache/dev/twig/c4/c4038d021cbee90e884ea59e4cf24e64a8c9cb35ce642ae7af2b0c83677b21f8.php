<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_22482ead16d3380dfac3dd0b0978df22c486cb8ca4acb6e1a8069afeeb9fe559 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e955390f446ff3dab0b550e4ea5123138b1d20ce721d7f4eaef6f3b39dfec585 = $this->env->getExtension("native_profiler");
        $__internal_e955390f446ff3dab0b550e4ea5123138b1d20ce721d7f4eaef6f3b39dfec585->enter($__internal_e955390f446ff3dab0b550e4ea5123138b1d20ce721d7f4eaef6f3b39dfec585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e955390f446ff3dab0b550e4ea5123138b1d20ce721d7f4eaef6f3b39dfec585->leave($__internal_e955390f446ff3dab0b550e4ea5123138b1d20ce721d7f4eaef6f3b39dfec585_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_49f3e8c5993e6b5fed1d467414ac3e1cdbf7e95ef196693708bb48d2821a4fc1 = $this->env->getExtension("native_profiler");
        $__internal_49f3e8c5993e6b5fed1d467414ac3e1cdbf7e95ef196693708bb48d2821a4fc1->enter($__internal_49f3e8c5993e6b5fed1d467414ac3e1cdbf7e95ef196693708bb48d2821a4fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_49f3e8c5993e6b5fed1d467414ac3e1cdbf7e95ef196693708bb48d2821a4fc1->leave($__internal_49f3e8c5993e6b5fed1d467414ac3e1cdbf7e95ef196693708bb48d2821a4fc1_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_32b9cd877d89bc840fba6f5ad927455bf8100e35589e5ffa459846160073a372 = $this->env->getExtension("native_profiler");
        $__internal_32b9cd877d89bc840fba6f5ad927455bf8100e35589e5ffa459846160073a372->enter($__internal_32b9cd877d89bc840fba6f5ad927455bf8100e35589e5ffa459846160073a372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 6)->display($context);
        
        $__internal_32b9cd877d89bc840fba6f5ad927455bf8100e35589e5ffa459846160073a372->leave($__internal_32b9cd877d89bc840fba6f5ad927455bf8100e35589e5ffa459846160073a372_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block body %}*/
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* {% endblock body %}*/
