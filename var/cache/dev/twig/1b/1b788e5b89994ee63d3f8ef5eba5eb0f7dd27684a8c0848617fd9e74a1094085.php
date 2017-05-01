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
        $__internal_9a42db2b295ab4741e036fdd5163558266af1f8f84ebcaa560254179105b2a4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a42db2b295ab4741e036fdd5163558266af1f8f84ebcaa560254179105b2a4e->enter($__internal_9a42db2b295ab4741e036fdd5163558266af1f8f84ebcaa560254179105b2a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c58a6836e389efd4cf16830bc149bb7bfc79f8e060a1873b9de256158419aab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58a6836e389efd4cf16830bc149bb7bfc79f8e060a1873b9de256158419aab7->enter($__internal_c58a6836e389efd4cf16830bc149bb7bfc79f8e060a1873b9de256158419aab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a42db2b295ab4741e036fdd5163558266af1f8f84ebcaa560254179105b2a4e->leave($__internal_9a42db2b295ab4741e036fdd5163558266af1f8f84ebcaa560254179105b2a4e_prof);

        
        $__internal_c58a6836e389efd4cf16830bc149bb7bfc79f8e060a1873b9de256158419aab7->leave($__internal_c58a6836e389efd4cf16830bc149bb7bfc79f8e060a1873b9de256158419aab7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4b1d7ace186f74077e00b84f2336590dfc580167c8ff00bfc94b2dc63d3341ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b1d7ace186f74077e00b84f2336590dfc580167c8ff00bfc94b2dc63d3341ca->enter($__internal_4b1d7ace186f74077e00b84f2336590dfc580167c8ff00bfc94b2dc63d3341ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_10ddf1c835a7009689ad96545feba07515209b911d22ded8b7a0939e5af0f3cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ddf1c835a7009689ad96545feba07515209b911d22ded8b7a0939e5af0f3cf->enter($__internal_10ddf1c835a7009689ad96545feba07515209b911d22ded8b7a0939e5af0f3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_10ddf1c835a7009689ad96545feba07515209b911d22ded8b7a0939e5af0f3cf->leave($__internal_10ddf1c835a7009689ad96545feba07515209b911d22ded8b7a0939e5af0f3cf_prof);

        
        $__internal_4b1d7ace186f74077e00b84f2336590dfc580167c8ff00bfc94b2dc63d3341ca->leave($__internal_4b1d7ace186f74077e00b84f2336590dfc580167c8ff00bfc94b2dc63d3341ca_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6440dfa4b93fdfd6883ecfcc6c36b867cfc518babaf1c7a2073a171e4e136a09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6440dfa4b93fdfd6883ecfcc6c36b867cfc518babaf1c7a2073a171e4e136a09->enter($__internal_6440dfa4b93fdfd6883ecfcc6c36b867cfc518babaf1c7a2073a171e4e136a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_125efc2e0f18e78f1cdaec0c0078a12f28afecf365bd7e15f173bfffa386df92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_125efc2e0f18e78f1cdaec0c0078a12f28afecf365bd7e15f173bfffa386df92->enter($__internal_125efc2e0f18e78f1cdaec0c0078a12f28afecf365bd7e15f173bfffa386df92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_125efc2e0f18e78f1cdaec0c0078a12f28afecf365bd7e15f173bfffa386df92->leave($__internal_125efc2e0f18e78f1cdaec0c0078a12f28afecf365bd7e15f173bfffa386df92_prof);

        
        $__internal_6440dfa4b93fdfd6883ecfcc6c36b867cfc518babaf1c7a2073a171e4e136a09->leave($__internal_6440dfa4b93fdfd6883ecfcc6c36b867cfc518babaf1c7a2073a171e4e136a09_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_46aeb88adce643972134899cc0fc8418c5b93d559b59945eaabfc9ef98ae66ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46aeb88adce643972134899cc0fc8418c5b93d559b59945eaabfc9ef98ae66ee->enter($__internal_46aeb88adce643972134899cc0fc8418c5b93d559b59945eaabfc9ef98ae66ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d312e2fbd12e476e2257e865403911e5cb11e38becc25f602ecd3b5887132b83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d312e2fbd12e476e2257e865403911e5cb11e38becc25f602ecd3b5887132b83->enter($__internal_d312e2fbd12e476e2257e865403911e5cb11e38becc25f602ecd3b5887132b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d312e2fbd12e476e2257e865403911e5cb11e38becc25f602ecd3b5887132b83->leave($__internal_d312e2fbd12e476e2257e865403911e5cb11e38becc25f602ecd3b5887132b83_prof);

        
        $__internal_46aeb88adce643972134899cc0fc8418c5b93d559b59945eaabfc9ef98ae66ee->leave($__internal_46aeb88adce643972134899cc0fc8418c5b93d559b59945eaabfc9ef98ae66ee_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/edvinas/demo_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
