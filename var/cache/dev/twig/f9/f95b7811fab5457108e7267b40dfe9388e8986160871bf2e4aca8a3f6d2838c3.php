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
        $__internal_7c5975d512956f8bd424e2afa90fa4eccfe7c69b24badf87a0589fa8684c2d67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c5975d512956f8bd424e2afa90fa4eccfe7c69b24badf87a0589fa8684c2d67->enter($__internal_7c5975d512956f8bd424e2afa90fa4eccfe7c69b24badf87a0589fa8684c2d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b39ef7075fe929829b3f3a16e43b67fc41f7a391e7bac819cc31cd6dc5e60ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b39ef7075fe929829b3f3a16e43b67fc41f7a391e7bac819cc31cd6dc5e60ca8->enter($__internal_b39ef7075fe929829b3f3a16e43b67fc41f7a391e7bac819cc31cd6dc5e60ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c5975d512956f8bd424e2afa90fa4eccfe7c69b24badf87a0589fa8684c2d67->leave($__internal_7c5975d512956f8bd424e2afa90fa4eccfe7c69b24badf87a0589fa8684c2d67_prof);

        
        $__internal_b39ef7075fe929829b3f3a16e43b67fc41f7a391e7bac819cc31cd6dc5e60ca8->leave($__internal_b39ef7075fe929829b3f3a16e43b67fc41f7a391e7bac819cc31cd6dc5e60ca8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d6f480c8767e78989d674f94278f2972df0ee2385d94ac94073f7239d7ed0cf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6f480c8767e78989d674f94278f2972df0ee2385d94ac94073f7239d7ed0cf6->enter($__internal_d6f480c8767e78989d674f94278f2972df0ee2385d94ac94073f7239d7ed0cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2f2ded9a9825045f0e1412777da39c328e44ee727fdbd024198795f852f86d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f2ded9a9825045f0e1412777da39c328e44ee727fdbd024198795f852f86d03->enter($__internal_2f2ded9a9825045f0e1412777da39c328e44ee727fdbd024198795f852f86d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2f2ded9a9825045f0e1412777da39c328e44ee727fdbd024198795f852f86d03->leave($__internal_2f2ded9a9825045f0e1412777da39c328e44ee727fdbd024198795f852f86d03_prof);

        
        $__internal_d6f480c8767e78989d674f94278f2972df0ee2385d94ac94073f7239d7ed0cf6->leave($__internal_d6f480c8767e78989d674f94278f2972df0ee2385d94ac94073f7239d7ed0cf6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_05951b7de36619f9d081ff89798384fcb9dcbaa69c1a1f457fdf9aac38550da2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05951b7de36619f9d081ff89798384fcb9dcbaa69c1a1f457fdf9aac38550da2->enter($__internal_05951b7de36619f9d081ff89798384fcb9dcbaa69c1a1f457fdf9aac38550da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fd1d7dbd4ee5087ace94c1a0902fa9593933d6c13f1e8d9705092665f8619f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd1d7dbd4ee5087ace94c1a0902fa9593933d6c13f1e8d9705092665f8619f78->enter($__internal_fd1d7dbd4ee5087ace94c1a0902fa9593933d6c13f1e8d9705092665f8619f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_fd1d7dbd4ee5087ace94c1a0902fa9593933d6c13f1e8d9705092665f8619f78->leave($__internal_fd1d7dbd4ee5087ace94c1a0902fa9593933d6c13f1e8d9705092665f8619f78_prof);

        
        $__internal_05951b7de36619f9d081ff89798384fcb9dcbaa69c1a1f457fdf9aac38550da2->leave($__internal_05951b7de36619f9d081ff89798384fcb9dcbaa69c1a1f457fdf9aac38550da2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_95ac586c3b84324ef920501ee3469f5c19bca457eef748e16860337dfe106107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95ac586c3b84324ef920501ee3469f5c19bca457eef748e16860337dfe106107->enter($__internal_95ac586c3b84324ef920501ee3469f5c19bca457eef748e16860337dfe106107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dea16067917566144903f7324651786ac2db4f0e0ab40307a26c8712e327bd40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea16067917566144903f7324651786ac2db4f0e0ab40307a26c8712e327bd40->enter($__internal_dea16067917566144903f7324651786ac2db4f0e0ab40307a26c8712e327bd40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_dea16067917566144903f7324651786ac2db4f0e0ab40307a26c8712e327bd40->leave($__internal_dea16067917566144903f7324651786ac2db4f0e0ab40307a26c8712e327bd40_prof);

        
        $__internal_95ac586c3b84324ef920501ee3469f5c19bca457eef748e16860337dfe106107->leave($__internal_95ac586c3b84324ef920501ee3469f5c19bca457eef748e16860337dfe106107_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/edvinas/PhpstormProjects/JellyTofuFish.github.io/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
