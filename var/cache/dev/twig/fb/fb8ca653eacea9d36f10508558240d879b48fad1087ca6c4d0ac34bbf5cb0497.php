<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b696e8f2b1710a23d3c1e367509a9017f08933c9a43f2688d9ee5c7418fec54b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_f4477294ec3be7d9aef88739615165ff015fe5b5120e83567ec68186260f908a = $this->env->getExtension("native_profiler");
        $__internal_f4477294ec3be7d9aef88739615165ff015fe5b5120e83567ec68186260f908a->enter($__internal_f4477294ec3be7d9aef88739615165ff015fe5b5120e83567ec68186260f908a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4477294ec3be7d9aef88739615165ff015fe5b5120e83567ec68186260f908a->leave($__internal_f4477294ec3be7d9aef88739615165ff015fe5b5120e83567ec68186260f908a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_11a53219765f08bf7865cdc73dd6ce6746d0a87c60b44d5d400c0873bdb08b5a = $this->env->getExtension("native_profiler");
        $__internal_11a53219765f08bf7865cdc73dd6ce6746d0a87c60b44d5d400c0873bdb08b5a->enter($__internal_11a53219765f08bf7865cdc73dd6ce6746d0a87c60b44d5d400c0873bdb08b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_11a53219765f08bf7865cdc73dd6ce6746d0a87c60b44d5d400c0873bdb08b5a->leave($__internal_11a53219765f08bf7865cdc73dd6ce6746d0a87c60b44d5d400c0873bdb08b5a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_036cba440415ccb2fac31bdbff8e8630962c9563b6dbc5c2477f06c79954f7c7 = $this->env->getExtension("native_profiler");
        $__internal_036cba440415ccb2fac31bdbff8e8630962c9563b6dbc5c2477f06c79954f7c7->enter($__internal_036cba440415ccb2fac31bdbff8e8630962c9563b6dbc5c2477f06c79954f7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_036cba440415ccb2fac31bdbff8e8630962c9563b6dbc5c2477f06c79954f7c7->leave($__internal_036cba440415ccb2fac31bdbff8e8630962c9563b6dbc5c2477f06c79954f7c7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0945cc7e0e33d7064ccfb9d8337bf9f90469697aa1c11f4c155f93da6d638b0a = $this->env->getExtension("native_profiler");
        $__internal_0945cc7e0e33d7064ccfb9d8337bf9f90469697aa1c11f4c155f93da6d638b0a->enter($__internal_0945cc7e0e33d7064ccfb9d8337bf9f90469697aa1c11f4c155f93da6d638b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0945cc7e0e33d7064ccfb9d8337bf9f90469697aa1c11f4c155f93da6d638b0a->leave($__internal_0945cc7e0e33d7064ccfb9d8337bf9f90469697aa1c11f4c155f93da6d638b0a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
