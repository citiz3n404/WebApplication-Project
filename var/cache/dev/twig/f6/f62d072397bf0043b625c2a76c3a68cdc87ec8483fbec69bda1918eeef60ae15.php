<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_6988b5dc93580966389c2e7e2bcb5a766d667dfdf14c625455726559014f507f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_589bde90b8d484e8527cbd8b004cf2221c8a35f2f2b3e38828873e556033946b = $this->env->getExtension("native_profiler");
        $__internal_589bde90b8d484e8527cbd8b004cf2221c8a35f2f2b3e38828873e556033946b->enter($__internal_589bde90b8d484e8527cbd8b004cf2221c8a35f2f2b3e38828873e556033946b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_589bde90b8d484e8527cbd8b004cf2221c8a35f2f2b3e38828873e556033946b->leave($__internal_589bde90b8d484e8527cbd8b004cf2221c8a35f2f2b3e38828873e556033946b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6190ee6f3de0cbee314b45e7972f90da53bd9517d8a47ca9cc339f49eb35f6e = $this->env->getExtension("native_profiler");
        $__internal_b6190ee6f3de0cbee314b45e7972f90da53bd9517d8a47ca9cc339f49eb35f6e->enter($__internal_b6190ee6f3de0cbee314b45e7972f90da53bd9517d8a47ca9cc339f49eb35f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
";
        // line 6
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_b6190ee6f3de0cbee314b45e7972f90da53bd9517d8a47ca9cc339f49eb35f6e->leave($__internal_b6190ee6f3de0cbee314b45e7972f90da53bd9517d8a47ca9cc339f49eb35f6e_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7d40b4cbc68f018f71d374a779a9b3d9e2408fbbf08c65a32b6d48bce7d9a49f = $this->env->getExtension("native_profiler");
        $__internal_7d40b4cbc68f018f71d374a779a9b3d9e2408fbbf08c65a32b6d48bce7d9a49f->enter($__internal_7d40b4cbc68f018f71d374a779a9b3d9e2408fbbf08c65a32b6d48bce7d9a49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 10
        echo "
<form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <label for=\"username\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
";
        
        $__internal_7d40b4cbc68f018f71d374a779a9b3d9e2408fbbf08c65a32b6d48bce7d9a49f->leave($__internal_7d40b4cbc68f018f71d374a779a9b3d9e2408fbbf08c65a32b6d48bce7d9a49f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 23,  92 => 21,  85 => 17,  80 => 15,  76 => 14,  71 => 12,  67 => 11,  64 => 10,  58 => 8,  56 => 7,  44 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block body %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*     <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*     <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*     <input type="password" id="password" name="_password" required="required" />*/
/* */
/*     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/* */
/*     <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/* </form>*/
/* {% endblock fos_user_content %}*/
/* {% endblock body %}*/
/* */
