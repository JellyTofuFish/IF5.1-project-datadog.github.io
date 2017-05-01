<?php

/* new/show.html.twig */
class __TwigTemplate_c95c8071c633f2cf3cb5c304cb8aaebac91dcb5841340690853c2aeae9278f41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "new/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_398d370109869696fecc98a67c44910417ed0b4c60e830252f7e8ce3cda87e46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_398d370109869696fecc98a67c44910417ed0b4c60e830252f7e8ce3cda87e46->enter($__internal_398d370109869696fecc98a67c44910417ed0b4c60e830252f7e8ce3cda87e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "new/show.html.twig"));

        $__internal_42b8117460d93408ac49d65327440e03152eb8fd9652d64fa09e524ba911b8a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b8117460d93408ac49d65327440e03152eb8fd9652d64fa09e524ba911b8a3->enter($__internal_42b8117460d93408ac49d65327440e03152eb8fd9652d64fa09e524ba911b8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "new/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_398d370109869696fecc98a67c44910417ed0b4c60e830252f7e8ce3cda87e46->leave($__internal_398d370109869696fecc98a67c44910417ed0b4c60e830252f7e8ce3cda87e46_prof);

        
        $__internal_42b8117460d93408ac49d65327440e03152eb8fd9652d64fa09e524ba911b8a3->leave($__internal_42b8117460d93408ac49d65327440e03152eb8fd9652d64fa09e524ba911b8a3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_01f8d60569d38875899eecae381c3387f3b5a22eb04d1bf6650817fb41ecbc19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01f8d60569d38875899eecae381c3387f3b5a22eb04d1bf6650817fb41ecbc19->enter($__internal_01f8d60569d38875899eecae381c3387f3b5a22eb04d1bf6650817fb41ecbc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b52cf8175929ed84b60e3cfc87f3ba0f9cc12cf5c877d3198a33dd2971fa72bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b52cf8175929ed84b60e3cfc87f3ba0f9cc12cf5c877d3198a33dd2971fa72bf->enter($__internal_b52cf8175929ed84b60e3cfc87f3ba0f9cc12cf5c877d3198a33dd2971fa72bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "New ";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        
        $__internal_b52cf8175929ed84b60e3cfc87f3ba0f9cc12cf5c877d3198a33dd2971fa72bf->leave($__internal_b52cf8175929ed84b60e3cfc87f3ba0f9cc12cf5c877d3198a33dd2971fa72bf_prof);

        
        $__internal_01f8d60569d38875899eecae381c3387f3b5a22eb04d1bf6650817fb41ecbc19->leave($__internal_01f8d60569d38875899eecae381c3387f3b5a22eb04d1bf6650817fb41ecbc19_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a367521ec56a800c4c4814f6548dbcacabcf794f5aeb19bb410265891e33785 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a367521ec56a800c4c4814f6548dbcacabcf794f5aeb19bb410265891e33785->enter($__internal_0a367521ec56a800c4c4814f6548dbcacabcf794f5aeb19bb410265891e33785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b37c05c25a3f03994539e75a5969595e1e61ecbb4762ad9c02f2e00086d937f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b37c05c25a3f03994539e75a5969595e1e61ecbb4762ad9c02f2e00086d937f->enter($__internal_2b37c05c25a3f03994539e75a5969595e1e61ecbb4762ad9c02f2e00086d937f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1> The new class: ";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "</h1>

<ul>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notes"] ?? $this->getContext($context, "notes")));
        foreach ($context['_seq'] as $context["_key"] => $context["node"]) {
            // line 10
            echo "    <li> ";
            echo twig_escape_filter($this->env, $context["node"], "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['node'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>
";
        
        $__internal_2b37c05c25a3f03994539e75a5969595e1e61ecbb4762ad9c02f2e00086d937f->leave($__internal_2b37c05c25a3f03994539e75a5969595e1e61ecbb4762ad9c02f2e00086d937f_prof);

        
        $__internal_0a367521ec56a800c4c4814f6548dbcacabcf794f5aeb19bb410265891e33785->leave($__internal_0a367521ec56a800c4c4814f6548dbcacabcf794f5aeb19bb410265891e33785_prof);

    }

    public function getTemplateName()
    {
        return "new/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 12,  80 => 10,  76 => 9,  69 => 6,  60 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}New {{ name }}{% endblock %}

{% block body %}
<h1> The new class: {{ name }}</h1>

<ul>
    {% for node in notes %}
    <li> {{ node }}</li>
    {% endfor %}
</ul>
{% endblock %}", "new/show.html.twig", "/home/edvinas/demo_project/app/Resources/views/new/show.html.twig");
    }
}
