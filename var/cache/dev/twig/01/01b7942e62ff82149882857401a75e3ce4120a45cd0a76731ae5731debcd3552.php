<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_e5cae215eb8df68942e6cf0280e5affe7d81ced5e9d28e30a55cf1afd808519b extends Twig_Template
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
        $__internal_09362f7e456b78d3294ec7e38b450a3042f2750a71f4902475f600f016615bb6 = $this->env->getExtension("native_profiler");
        $__internal_09362f7e456b78d3294ec7e38b450a3042f2750a71f4902475f600f016615bb6->enter($__internal_09362f7e456b78d3294ec7e38b450a3042f2750a71f4902475f600f016615bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09362f7e456b78d3294ec7e38b450a3042f2750a71f4902475f600f016615bb6->leave($__internal_09362f7e456b78d3294ec7e38b450a3042f2750a71f4902475f600f016615bb6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_38822fac305a4a4c3a7084eb8b8585e553900bcba675b2d8ef691544ac643032 = $this->env->getExtension("native_profiler");
        $__internal_38822fac305a4a4c3a7084eb8b8585e553900bcba675b2d8ef691544ac643032->enter($__internal_38822fac305a4a4c3a7084eb8b8585e553900bcba675b2d8ef691544ac643032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_38822fac305a4a4c3a7084eb8b8585e553900bcba675b2d8ef691544ac643032->leave($__internal_38822fac305a4a4c3a7084eb8b8585e553900bcba675b2d8ef691544ac643032_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_32161f292c050e07d1d17969120383839980cbf315cec01dce90c2eef662bbae = $this->env->getExtension("native_profiler");
        $__internal_32161f292c050e07d1d17969120383839980cbf315cec01dce90c2eef662bbae->enter($__internal_32161f292c050e07d1d17969120383839980cbf315cec01dce90c2eef662bbae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_32161f292c050e07d1d17969120383839980cbf315cec01dce90c2eef662bbae->leave($__internal_32161f292c050e07d1d17969120383839980cbf315cec01dce90c2eef662bbae_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9243b1b858ecd6ab964a14b6b467b4b2765d26da56c7da44c8388e0394d190f8 = $this->env->getExtension("native_profiler");
        $__internal_9243b1b858ecd6ab964a14b6b467b4b2765d26da56c7da44c8388e0394d190f8->enter($__internal_9243b1b858ecd6ab964a14b6b467b4b2765d26da56c7da44c8388e0394d190f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9243b1b858ecd6ab964a14b6b467b4b2765d26da56c7da44c8388e0394d190f8->leave($__internal_9243b1b858ecd6ab964a14b6b467b4b2765d26da56c7da44c8388e0394d190f8_prof);

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
