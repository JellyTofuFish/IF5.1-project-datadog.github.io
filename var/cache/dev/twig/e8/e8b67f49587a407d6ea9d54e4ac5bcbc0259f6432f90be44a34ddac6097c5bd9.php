<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_04b0d5b68b2e7cad0dd94f8a266e92ef18dc421a23faaba9704df6a5f3ed9acd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf56c6780b83a1c70345c141fbe7fdad17901ef97b0918091d81a1fa528c986c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf56c6780b83a1c70345c141fbe7fdad17901ef97b0918091d81a1fa528c986c->enter($__internal_cf56c6780b83a1c70345c141fbe7fdad17901ef97b0918091d81a1fa528c986c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_76bb887aa323df10bf8fbe42f5a4ceafabfad553b32e51fec4477ecbd44423e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76bb887aa323df10bf8fbe42f5a4ceafabfad553b32e51fec4477ecbd44423e2->enter($__internal_76bb887aa323df10bf8fbe42f5a4ceafabfad553b32e51fec4477ecbd44423e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf56c6780b83a1c70345c141fbe7fdad17901ef97b0918091d81a1fa528c986c->leave($__internal_cf56c6780b83a1c70345c141fbe7fdad17901ef97b0918091d81a1fa528c986c_prof);

        
        $__internal_76bb887aa323df10bf8fbe42f5a4ceafabfad553b32e51fec4477ecbd44423e2->leave($__internal_76bb887aa323df10bf8fbe42f5a4ceafabfad553b32e51fec4477ecbd44423e2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cd437d1fdef1802503a20e2686b4ab90b4d908a3a2223b084e73df624c06827d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd437d1fdef1802503a20e2686b4ab90b4d908a3a2223b084e73df624c06827d->enter($__internal_cd437d1fdef1802503a20e2686b4ab90b4d908a3a2223b084e73df624c06827d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ff66a0ca993b2fbb6105c2b7adca7c2924903182c945e4449c521f2c6e10fd3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff66a0ca993b2fbb6105c2b7adca7c2924903182c945e4449c521f2c6e10fd3e->enter($__internal_ff66a0ca993b2fbb6105c2b7adca7c2924903182c945e4449c521f2c6e10fd3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_ff66a0ca993b2fbb6105c2b7adca7c2924903182c945e4449c521f2c6e10fd3e->leave($__internal_ff66a0ca993b2fbb6105c2b7adca7c2924903182c945e4449c521f2c6e10fd3e_prof);

        
        $__internal_cd437d1fdef1802503a20e2686b4ab90b4d908a3a2223b084e73df624c06827d->leave($__internal_cd437d1fdef1802503a20e2686b4ab90b4d908a3a2223b084e73df624c06827d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_bccce9acafdd6b94bf43ce616cb2fc0659a48160efc7dc114da6d7902a17cda1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bccce9acafdd6b94bf43ce616cb2fc0659a48160efc7dc114da6d7902a17cda1->enter($__internal_bccce9acafdd6b94bf43ce616cb2fc0659a48160efc7dc114da6d7902a17cda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2d43cf06c48e96269be5dfe474c7847665b2725ae5d0e4cfc005086695125b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d43cf06c48e96269be5dfe474c7847665b2725ae5d0e4cfc005086695125b71->enter($__internal_2d43cf06c48e96269be5dfe474c7847665b2725ae5d0e4cfc005086695125b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2d43cf06c48e96269be5dfe474c7847665b2725ae5d0e4cfc005086695125b71->leave($__internal_2d43cf06c48e96269be5dfe474c7847665b2725ae5d0e4cfc005086695125b71_prof);

        
        $__internal_bccce9acafdd6b94bf43ce616cb2fc0659a48160efc7dc114da6d7902a17cda1->leave($__internal_bccce9acafdd6b94bf43ce616cb2fc0659a48160efc7dc114da6d7902a17cda1_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8015c44b994f7bce5258d666e5685fa4388fa5dd8eb455e017e013ad94f3b01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8015c44b994f7bce5258d666e5685fa4388fa5dd8eb455e017e013ad94f3b01->enter($__internal_f8015c44b994f7bce5258d666e5685fa4388fa5dd8eb455e017e013ad94f3b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6486ac9ba3606f4bdce16f534b3adb9fd29d2ef8a5fc67aff3d10c1061c1ad90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6486ac9ba3606f4bdce16f534b3adb9fd29d2ef8a5fc67aff3d10c1061c1ad90->enter($__internal_6486ac9ba3606f4bdce16f534b3adb9fd29d2ef8a5fc67aff3d10c1061c1ad90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_6486ac9ba3606f4bdce16f534b3adb9fd29d2ef8a5fc67aff3d10c1061c1ad90->leave($__internal_6486ac9ba3606f4bdce16f534b3adb9fd29d2ef8a5fc67aff3d10c1061c1ad90_prof);

        
        $__internal_f8015c44b994f7bce5258d666e5685fa4388fa5dd8eb455e017e013ad94f3b01->leave($__internal_f8015c44b994f7bce5258d666e5685fa4388fa5dd8eb455e017e013ad94f3b01_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/edvinas/demo_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
