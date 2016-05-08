<?php

/* FormationBundle:Default:edit.html.twig */
class __TwigTemplate_e577e54ea65ec4d53cd86ca4f20c11e002630a3809dc195f9ca4bb34907ede85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FormationBundle:Default:edit.html.twig", 1);
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
        $__internal_bd40f3542b61b37abbe78e5670b8cc23121fe004c916f8bdb4b6b24324c31ce8 = $this->env->getExtension("native_profiler");
        $__internal_bd40f3542b61b37abbe78e5670b8cc23121fe004c916f8bdb4b6b24324c31ce8->enter($__internal_bd40f3542b61b37abbe78e5670b8cc23121fe004c916f8bdb4b6b24324c31ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormationBundle:Default:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd40f3542b61b37abbe78e5670b8cc23121fe004c916f8bdb4b6b24324c31ce8->leave($__internal_bd40f3542b61b37abbe78e5670b8cc23121fe004c916f8bdb4b6b24324c31ce8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a6c73fcca2f8a4b619476a21348477e04178a10e8b41099885b6c7f5c20c476 = $this->env->getExtension("native_profiler");
        $__internal_9a6c73fcca2f8a4b619476a21348477e04178a10e8b41099885b6c7f5c20c476->enter($__internal_9a6c73fcca2f8a4b619476a21348477e04178a10e8b41099885b6c7f5c20c476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">Edit</h2>
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
        
        $__internal_9a6c73fcca2f8a4b619476a21348477e04178a10e8b41099885b6c7f5c20c476->leave($__internal_9a6c73fcca2f8a4b619476a21348477e04178a10e8b41099885b6c7f5c20c476_prof);

    }

    public function getTemplateName()
    {
        return "FormationBundle:Default:edit.html.twig";
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
/*     <h2 class="page-header">Edit</h2>*/
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
