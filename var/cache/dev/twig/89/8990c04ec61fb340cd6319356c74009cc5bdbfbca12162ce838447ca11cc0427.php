<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7b6bbf073fc1d65747bc8f7938b11d7f392cbc9dc60966505cf1a237a5c9fe2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d3718e0ec19c5778a6978fd21201fd86f34d0aa7dd112c5c297f007c14dbbcb = $this->env->getExtension("native_profiler");
        $__internal_3d3718e0ec19c5778a6978fd21201fd86f34d0aa7dd112c5c297f007c14dbbcb->enter($__internal_3d3718e0ec19c5778a6978fd21201fd86f34d0aa7dd112c5c297f007c14dbbcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d3718e0ec19c5778a6978fd21201fd86f34d0aa7dd112c5c297f007c14dbbcb->leave($__internal_3d3718e0ec19c5778a6978fd21201fd86f34d0aa7dd112c5c297f007c14dbbcb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7b24ab3717fad2fe88ca6d61eb7c255789353ff0f773a5273e149a82c2efcc13 = $this->env->getExtension("native_profiler");
        $__internal_7b24ab3717fad2fe88ca6d61eb7c255789353ff0f773a5273e149a82c2efcc13->enter($__internal_7b24ab3717fad2fe88ca6d61eb7c255789353ff0f773a5273e149a82c2efcc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7b24ab3717fad2fe88ca6d61eb7c255789353ff0f773a5273e149a82c2efcc13->leave($__internal_7b24ab3717fad2fe88ca6d61eb7c255789353ff0f773a5273e149a82c2efcc13_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e31b23d2a177ef4749f383755afe5e9fbc2f5321e46190c2d4622ed2f2fda524 = $this->env->getExtension("native_profiler");
        $__internal_e31b23d2a177ef4749f383755afe5e9fbc2f5321e46190c2d4622ed2f2fda524->enter($__internal_e31b23d2a177ef4749f383755afe5e9fbc2f5321e46190c2d4622ed2f2fda524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e31b23d2a177ef4749f383755afe5e9fbc2f5321e46190c2d4622ed2f2fda524->leave($__internal_e31b23d2a177ef4749f383755afe5e9fbc2f5321e46190c2d4622ed2f2fda524_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_03e518b01de652df974297a3277e425273b5f3e264cf3d69892c73053bc54ee1 = $this->env->getExtension("native_profiler");
        $__internal_03e518b01de652df974297a3277e425273b5f3e264cf3d69892c73053bc54ee1->enter($__internal_03e518b01de652df974297a3277e425273b5f3e264cf3d69892c73053bc54ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_03e518b01de652df974297a3277e425273b5f3e264cf3d69892c73053bc54ee1->leave($__internal_03e518b01de652df974297a3277e425273b5f3e264cf3d69892c73053bc54ee1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
