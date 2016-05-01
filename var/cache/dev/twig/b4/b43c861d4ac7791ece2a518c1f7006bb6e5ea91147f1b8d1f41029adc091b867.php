<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_c010bd7fb688dbb6286591bf3d45274a9e651de139db8eea4d2bb39825304119 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee80b2542a92b2587563ac176d7f4c9b970a7f68b744f0acb11ac5c1cc06d5cf = $this->env->getExtension("native_profiler");
        $__internal_ee80b2542a92b2587563ac176d7f4c9b970a7f68b744f0acb11ac5c1cc06d5cf->enter($__internal_ee80b2542a92b2587563ac176d7f4c9b970a7f68b744f0acb11ac5c1cc06d5cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_ee80b2542a92b2587563ac176d7f4c9b970a7f68b744f0acb11ac5c1cc06d5cf->leave($__internal_ee80b2542a92b2587563ac176d7f4c9b970a7f68b744f0acb11ac5c1cc06d5cf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* */
