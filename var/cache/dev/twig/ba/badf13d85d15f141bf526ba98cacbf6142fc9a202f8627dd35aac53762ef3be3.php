<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_e100ca168a71dcc150dfd331a0d0f126c5adaaf7ff3963c0dd6cf4180b709425 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_25f2f4d52f7b1d90802118f27fb5365881016702f02b432402478bcc0ecf036c = $this->env->getExtension("native_profiler");
        $__internal_25f2f4d52f7b1d90802118f27fb5365881016702f02b432402478bcc0ecf036c->enter($__internal_25f2f4d52f7b1d90802118f27fb5365881016702f02b432402478bcc0ecf036c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25f2f4d52f7b1d90802118f27fb5365881016702f02b432402478bcc0ecf036c->leave($__internal_25f2f4d52f7b1d90802118f27fb5365881016702f02b432402478bcc0ecf036c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_432780bf0d0e06d9491d24c54748a5a590570dfeb2187265d7bfa10060179d3d = $this->env->getExtension("native_profiler");
        $__internal_432780bf0d0e06d9491d24c54748a5a590570dfeb2187265d7bfa10060179d3d->enter($__internal_432780bf0d0e06d9491d24c54748a5a590570dfeb2187265d7bfa10060179d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_432780bf0d0e06d9491d24c54748a5a590570dfeb2187265d7bfa10060179d3d->leave($__internal_432780bf0d0e06d9491d24c54748a5a590570dfeb2187265d7bfa10060179d3d_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7fe86b79eed8b3f61a417dffdae1b96ef92295febb5e1488870d1fb8035fd64e = $this->env->getExtension("native_profiler");
        $__internal_7fe86b79eed8b3f61a417dffdae1b96ef92295febb5e1488870d1fb8035fd64e->enter($__internal_7fe86b79eed8b3f61a417dffdae1b96ef92295febb5e1488870d1fb8035fd64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_7fe86b79eed8b3f61a417dffdae1b96ef92295febb5e1488870d1fb8035fd64e->leave($__internal_7fe86b79eed8b3f61a417dffdae1b96ef92295febb5e1488870d1fb8035fd64e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 8,  58 => 7,  53 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block body %}*/
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* {% endblock body %}*/
