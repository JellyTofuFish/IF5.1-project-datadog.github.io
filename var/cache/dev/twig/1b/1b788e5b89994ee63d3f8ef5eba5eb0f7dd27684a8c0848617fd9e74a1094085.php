<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e32fe7bbc587592d7d02b52fb0d248e7f6247282752466e0f9c5031b2c7e618c extends Twig_Template
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
        $__internal_d9d7d4ca92568cbb784635c4d87b6dcc681c98dbb3601928f5fc828c5b8dd394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9d7d4ca92568cbb784635c4d87b6dcc681c98dbb3601928f5fc828c5b8dd394->enter($__internal_d9d7d4ca92568cbb784635c4d87b6dcc681c98dbb3601928f5fc828c5b8dd394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a36143ceeee79c0f9deb2f6ee358caf4019ae92d66db061ef9926e960af1a426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a36143ceeee79c0f9deb2f6ee358caf4019ae92d66db061ef9926e960af1a426->enter($__internal_a36143ceeee79c0f9deb2f6ee358caf4019ae92d66db061ef9926e960af1a426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9d7d4ca92568cbb784635c4d87b6dcc681c98dbb3601928f5fc828c5b8dd394->leave($__internal_d9d7d4ca92568cbb784635c4d87b6dcc681c98dbb3601928f5fc828c5b8dd394_prof);

        
        $__internal_a36143ceeee79c0f9deb2f6ee358caf4019ae92d66db061ef9926e960af1a426->leave($__internal_a36143ceeee79c0f9deb2f6ee358caf4019ae92d66db061ef9926e960af1a426_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dec42f0f8f65fdaeb592de30755e2f357542f38611d44a890fe9d9fda8d2e08c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dec42f0f8f65fdaeb592de30755e2f357542f38611d44a890fe9d9fda8d2e08c->enter($__internal_dec42f0f8f65fdaeb592de30755e2f357542f38611d44a890fe9d9fda8d2e08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_115c364ce1232cd8f78c491549f9481f82911719095f7d885efa498044722773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115c364ce1232cd8f78c491549f9481f82911719095f7d885efa498044722773->enter($__internal_115c364ce1232cd8f78c491549f9481f82911719095f7d885efa498044722773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_115c364ce1232cd8f78c491549f9481f82911719095f7d885efa498044722773->leave($__internal_115c364ce1232cd8f78c491549f9481f82911719095f7d885efa498044722773_prof);

        
        $__internal_dec42f0f8f65fdaeb592de30755e2f357542f38611d44a890fe9d9fda8d2e08c->leave($__internal_dec42f0f8f65fdaeb592de30755e2f357542f38611d44a890fe9d9fda8d2e08c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_13198e3d550cab2276632f606c5c5cd60c3a635382170867761bdb3974169a24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13198e3d550cab2276632f606c5c5cd60c3a635382170867761bdb3974169a24->enter($__internal_13198e3d550cab2276632f606c5c5cd60c3a635382170867761bdb3974169a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b327eeaa92461601449a3066292d33f2e14b99bda1369e2eceb9abd21e6615bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b327eeaa92461601449a3066292d33f2e14b99bda1369e2eceb9abd21e6615bc->enter($__internal_b327eeaa92461601449a3066292d33f2e14b99bda1369e2eceb9abd21e6615bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b327eeaa92461601449a3066292d33f2e14b99bda1369e2eceb9abd21e6615bc->leave($__internal_b327eeaa92461601449a3066292d33f2e14b99bda1369e2eceb9abd21e6615bc_prof);

        
        $__internal_13198e3d550cab2276632f606c5c5cd60c3a635382170867761bdb3974169a24->leave($__internal_13198e3d550cab2276632f606c5c5cd60c3a635382170867761bdb3974169a24_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a4626a0c71ac81e75591efebae91b8a06995de70f330102b5f1731254a3dd111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4626a0c71ac81e75591efebae91b8a06995de70f330102b5f1731254a3dd111->enter($__internal_a4626a0c71ac81e75591efebae91b8a06995de70f330102b5f1731254a3dd111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_84f2fcc0c5aa4ef7eba00cf2b86d9007adac00f8b0bba6b4272060af4e9e1739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f2fcc0c5aa4ef7eba00cf2b86d9007adac00f8b0bba6b4272060af4e9e1739->enter($__internal_84f2fcc0c5aa4ef7eba00cf2b86d9007adac00f8b0bba6b4272060af4e9e1739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_84f2fcc0c5aa4ef7eba00cf2b86d9007adac00f8b0bba6b4272060af4e9e1739->leave($__internal_84f2fcc0c5aa4ef7eba00cf2b86d9007adac00f8b0bba6b4272060af4e9e1739_prof);

        
        $__internal_a4626a0c71ac81e75591efebae91b8a06995de70f330102b5f1731254a3dd111->leave($__internal_a4626a0c71ac81e75591efebae91b8a06995de70f330102b5f1731254a3dd111_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/edvinas/PhpstormProjects/JellyTofuFish.github.io/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
