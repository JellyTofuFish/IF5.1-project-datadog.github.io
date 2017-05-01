<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_bd839a623d41e65c7ad875f8876c26b53612d034a2fd2ba100c18e03a3c8b771 extends Twig_Template
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
        $__internal_f4f569a0e5c8dfdfd67a5e9fe98b8393a7a3adda8b194c6a8d5b84c5130ed5ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4f569a0e5c8dfdfd67a5e9fe98b8393a7a3adda8b194c6a8d5b84c5130ed5ba->enter($__internal_f4f569a0e5c8dfdfd67a5e9fe98b8393a7a3adda8b194c6a8d5b84c5130ed5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e3df34541b1b0432765ad8a7317741bc0e155f2dda7395df24375151a9997f7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3df34541b1b0432765ad8a7317741bc0e155f2dda7395df24375151a9997f7d->enter($__internal_e3df34541b1b0432765ad8a7317741bc0e155f2dda7395df24375151a9997f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4f569a0e5c8dfdfd67a5e9fe98b8393a7a3adda8b194c6a8d5b84c5130ed5ba->leave($__internal_f4f569a0e5c8dfdfd67a5e9fe98b8393a7a3adda8b194c6a8d5b84c5130ed5ba_prof);

        
        $__internal_e3df34541b1b0432765ad8a7317741bc0e155f2dda7395df24375151a9997f7d->leave($__internal_e3df34541b1b0432765ad8a7317741bc0e155f2dda7395df24375151a9997f7d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_680ca776a4ed119c94526c4abf10f50acd4dcedc62e6b3e4dfc6ec979de8485c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_680ca776a4ed119c94526c4abf10f50acd4dcedc62e6b3e4dfc6ec979de8485c->enter($__internal_680ca776a4ed119c94526c4abf10f50acd4dcedc62e6b3e4dfc6ec979de8485c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_873925912f4e83f288124f3c4c7a04ebdc5904d9e79e1c76e6121a17b7a70fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_873925912f4e83f288124f3c4c7a04ebdc5904d9e79e1c76e6121a17b7a70fd9->enter($__internal_873925912f4e83f288124f3c4c7a04ebdc5904d9e79e1c76e6121a17b7a70fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_873925912f4e83f288124f3c4c7a04ebdc5904d9e79e1c76e6121a17b7a70fd9->leave($__internal_873925912f4e83f288124f3c4c7a04ebdc5904d9e79e1c76e6121a17b7a70fd9_prof);

        
        $__internal_680ca776a4ed119c94526c4abf10f50acd4dcedc62e6b3e4dfc6ec979de8485c->leave($__internal_680ca776a4ed119c94526c4abf10f50acd4dcedc62e6b3e4dfc6ec979de8485c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9e89ccdf6bf479525794a612d70683bef4c7cd49febebc5e7fbc044fe8724ed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e89ccdf6bf479525794a612d70683bef4c7cd49febebc5e7fbc044fe8724ed4->enter($__internal_9e89ccdf6bf479525794a612d70683bef4c7cd49febebc5e7fbc044fe8724ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a227d6aea3a07c12f622f929d69ffaec3080124c1811a6366f78685d8e4680d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a227d6aea3a07c12f622f929d69ffaec3080124c1811a6366f78685d8e4680d2->enter($__internal_a227d6aea3a07c12f622f929d69ffaec3080124c1811a6366f78685d8e4680d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a227d6aea3a07c12f622f929d69ffaec3080124c1811a6366f78685d8e4680d2->leave($__internal_a227d6aea3a07c12f622f929d69ffaec3080124c1811a6366f78685d8e4680d2_prof);

        
        $__internal_9e89ccdf6bf479525794a612d70683bef4c7cd49febebc5e7fbc044fe8724ed4->leave($__internal_9e89ccdf6bf479525794a612d70683bef4c7cd49febebc5e7fbc044fe8724ed4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1dd2ffcff06c5b937344ef8850ee8117af3a2c966382d158214141f80695d55c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dd2ffcff06c5b937344ef8850ee8117af3a2c966382d158214141f80695d55c->enter($__internal_1dd2ffcff06c5b937344ef8850ee8117af3a2c966382d158214141f80695d55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_22552cac654c98dc6e4e02b18711bbd36543704829f9ec00d9f9870fb39a8595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22552cac654c98dc6e4e02b18711bbd36543704829f9ec00d9f9870fb39a8595->enter($__internal_22552cac654c98dc6e4e02b18711bbd36543704829f9ec00d9f9870fb39a8595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_22552cac654c98dc6e4e02b18711bbd36543704829f9ec00d9f9870fb39a8595->leave($__internal_22552cac654c98dc6e4e02b18711bbd36543704829f9ec00d9f9870fb39a8595_prof);

        
        $__internal_1dd2ffcff06c5b937344ef8850ee8117af3a2c966382d158214141f80695d55c->leave($__internal_1dd2ffcff06c5b937344ef8850ee8117af3a2c966382d158214141f80695d55c_prof);

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
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/edvinas/demo_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
