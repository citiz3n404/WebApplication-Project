<?php

/* ForumBundle:Categorie:create.html.twig */
class __TwigTemplate_734dc90a21283fda3311baee714599ff8b3c1202572d608fc0e7c62b0aabb081 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ForumBundle:Categorie:create.html.twig", 1);
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
        $__internal_e52d9a3147d8bab09b4c2d07ac1e283de459cd41f0e2f5a6be0d92262cd10b23 = $this->env->getExtension("native_profiler");
        $__internal_e52d9a3147d8bab09b4c2d07ac1e283de459cd41f0e2f5a6be0d92262cd10b23->enter($__internal_e52d9a3147d8bab09b4c2d07ac1e283de459cd41f0e2f5a6be0d92262cd10b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Categorie:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e52d9a3147d8bab09b4c2d07ac1e283de459cd41f0e2f5a6be0d92262cd10b23->leave($__internal_e52d9a3147d8bab09b4c2d07ac1e283de459cd41f0e2f5a6be0d92262cd10b23_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_227f7c90069c12cdcbdb9a97c37fe4f4f836df4f946ffda0e1f1d2e37bd266d2 = $this->env->getExtension("native_profiler");
        $__internal_227f7c90069c12cdcbdb9a97c37fe4f4f836df4f946ffda0e1f1d2e37bd266d2->enter($__internal_227f7c90069c12cdcbdb9a97c37fe4f4f836df4f946ffda0e1f1d2e37bd266d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">Add Categorie</h2>
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
        
        $__internal_227f7c90069c12cdcbdb9a97c37fe4f4f836df4f946ffda0e1f1d2e37bd266d2->leave($__internal_227f7c90069c12cdcbdb9a97c37fe4f4f836df4f946ffda0e1f1d2e37bd266d2_prof);

    }

    public function getTemplateName()
    {
        return "ForumBundle:Categorie:create.html.twig";
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
/*     <h2 class="page-header">Add Categorie</h2>*/
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
