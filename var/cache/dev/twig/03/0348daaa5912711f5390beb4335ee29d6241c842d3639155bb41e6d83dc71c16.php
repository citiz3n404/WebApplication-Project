<?php

/* ForumBundle:Topic:topic.html.twig */
class __TwigTemplate_55d8cd40012868d628e8289bcfe31409f6b9c0dd186b3751fe2677297da9c2dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ForumBundle:Topic:topic.html.twig", 1);
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
        $__internal_bbe717ba787aee44d9eedf3139eb132dd719e6b2a971bfd18235780c82d05646 = $this->env->getExtension("native_profiler");
        $__internal_bbe717ba787aee44d9eedf3139eb132dd719e6b2a971bfd18235780c82d05646->enter($__internal_bbe717ba787aee44d9eedf3139eb132dd719e6b2a971bfd18235780c82d05646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Topic:topic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbe717ba787aee44d9eedf3139eb132dd719e6b2a971bfd18235780c82d05646->leave($__internal_bbe717ba787aee44d9eedf3139eb132dd719e6b2a971bfd18235780c82d05646_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_25d719edd31b3ca64d45a0c1382e4484e8cff88aa40ff8320e9c6239ef867400 = $this->env->getExtension("native_profiler");
        $__internal_25d719edd31b3ca64d45a0c1382e4484e8cff88aa40ff8320e9c6239ef867400->enter($__internal_25d719edd31b3ca64d45a0c1382e4484e8cff88aa40ff8320e9c6239ef867400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h2 class=\"page-header\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "subject", array()), "html", null, true);
        echo "</h2>
    ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "date", array()), "y-m-d"), "html", null, true);
        echo "
    ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "user", array()), "html", null, true);
        echo "

    </hr>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "replies", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
            // line 9
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reply"], "user", array()), "username", array()), "html", null, true);
            echo "
        ";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reply"], "date", array()), "y-m-d"), "html", null, true);
            echo "
        ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["reply"], "content", array()), "html", null, true);
            echo "
        </hr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
";
        
        $__internal_25d719edd31b3ca64d45a0c1382e4484e8cff88aa40ff8320e9c6239ef867400->leave($__internal_25d719edd31b3ca64d45a0c1382e4484e8cff88aa40ff8320e9c6239ef867400_prof);

    }

    public function getTemplateName()
    {
        return "ForumBundle:Topic:topic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 14,  68 => 11,  64 => 10,  59 => 9,  55 => 8,  49 => 5,  45 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <h2 class="page-header">{{ topic.subject }}</h2>*/
/*     {{ topic.date|date('y-m-d') }}*/
/*     {{ topic.user }}*/
/* */
/*     </hr>*/
/*     {% for reply in topic.replies %}*/
/*         {{ reply.user.username }}*/
/*         {{ reply.date|date('y-m-d') }}*/
/*         {{ reply.content }}*/
/*         </hr>*/
/*     {% endfor %}*/
/* */
/* {% endblock %}*/
