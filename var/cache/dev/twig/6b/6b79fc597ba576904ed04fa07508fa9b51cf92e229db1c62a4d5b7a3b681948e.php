<?php

/* FormationBundle:Default:create.html.twig */
class __TwigTemplate_08f99fd6deb8fba7eceb06056989ea3729f50c21e3f0dd6ec85293c618612766 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FormationBundle:Default:create.html.twig", 1);
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
        $__internal_0e9787a89d39a128797f08db3b4e161de9043eedb598817bf9001987736a57ef = $this->env->getExtension("native_profiler");
        $__internal_0e9787a89d39a128797f08db3b4e161de9043eedb598817bf9001987736a57ef->enter($__internal_0e9787a89d39a128797f08db3b4e161de9043eedb598817bf9001987736a57ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormationBundle:Default:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e9787a89d39a128797f08db3b4e161de9043eedb598817bf9001987736a57ef->leave($__internal_0e9787a89d39a128797f08db3b4e161de9043eedb598817bf9001987736a57ef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d8bab15b2126110ef5fc0559e71ffd16212a69b6feb8a45ef1d90c86c632125 = $this->env->getExtension("native_profiler");
        $__internal_6d8bab15b2126110ef5fc0559e71ffd16212a69b6feb8a45ef1d90c86c632125->enter($__internal_6d8bab15b2126110ef5fc0559e71ffd16212a69b6feb8a45ef1d90c86c632125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">Nouvelle formation</h2>
    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_6d8bab15b2126110ef5fc0559e71ffd16212a69b6feb8a45ef1d90c86c632125->leave($__internal_6d8bab15b2126110ef5fc0559e71ffd16212a69b6feb8a45ef1d90c86c632125_prof);

    }

    public function getTemplateName()
    {
        return "FormationBundle:Default:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h2 class="page-header">Nouvelle formation</h2>*/
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
