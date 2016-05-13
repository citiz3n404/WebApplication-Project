<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_58f98efb576c5a7bd4937a32e2038b22910b39373378897ab4394470fdcb56e3 extends Twig_Template
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
        $__internal_417df639426a4c46fe72329c99245e9a547411262b47e5cad0922ae5b9bb75f1 = $this->env->getExtension("native_profiler");
        $__internal_417df639426a4c46fe72329c99245e9a547411262b47e5cad0922ae5b9bb75f1->enter($__internal_417df639426a4c46fe72329c99245e9a547411262b47e5cad0922ae5b9bb75f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_417df639426a4c46fe72329c99245e9a547411262b47e5cad0922ae5b9bb75f1->leave($__internal_417df639426a4c46fe72329c99245e9a547411262b47e5cad0922ae5b9bb75f1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a64d37fe27a182af2f22306443b73da9656efc275bef405b6f0477fcbddf13be = $this->env->getExtension("native_profiler");
        $__internal_a64d37fe27a182af2f22306443b73da9656efc275bef405b6f0477fcbddf13be->enter($__internal_a64d37fe27a182af2f22306443b73da9656efc275bef405b6f0477fcbddf13be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a64d37fe27a182af2f22306443b73da9656efc275bef405b6f0477fcbddf13be->leave($__internal_a64d37fe27a182af2f22306443b73da9656efc275bef405b6f0477fcbddf13be_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c464f8c2751af62c49f6b9ca1768174a34b878677be49d98303cdd5c7f7827b1 = $this->env->getExtension("native_profiler");
        $__internal_c464f8c2751af62c49f6b9ca1768174a34b878677be49d98303cdd5c7f7827b1->enter($__internal_c464f8c2751af62c49f6b9ca1768174a34b878677be49d98303cdd5c7f7827b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c464f8c2751af62c49f6b9ca1768174a34b878677be49d98303cdd5c7f7827b1->leave($__internal_c464f8c2751af62c49f6b9ca1768174a34b878677be49d98303cdd5c7f7827b1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_74a28890e9ec66c8d4ea995d0291b01ed56ff7c66a63684d3e68a1b1f01d389a = $this->env->getExtension("native_profiler");
        $__internal_74a28890e9ec66c8d4ea995d0291b01ed56ff7c66a63684d3e68a1b1f01d389a->enter($__internal_74a28890e9ec66c8d4ea995d0291b01ed56ff7c66a63684d3e68a1b1f01d389a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_74a28890e9ec66c8d4ea995d0291b01ed56ff7c66a63684d3e68a1b1f01d389a->leave($__internal_74a28890e9ec66c8d4ea995d0291b01ed56ff7c66a63684d3e68a1b1f01d389a_prof);

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
