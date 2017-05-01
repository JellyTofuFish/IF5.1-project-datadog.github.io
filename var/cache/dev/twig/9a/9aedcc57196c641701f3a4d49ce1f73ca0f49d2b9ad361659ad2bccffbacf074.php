<?php

/* base.html.twig */
class __TwigTemplate_ecb3622156435dcef755b54ddd8e4732d0aa1bb06c91b31273e3d3ad684eea6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00551999e3ae4c76e88d06ec1aa3e44ca2dd8d097d416f1b7dfe9d6e21340137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00551999e3ae4c76e88d06ec1aa3e44ca2dd8d097d416f1b7dfe9d6e21340137->enter($__internal_00551999e3ae4c76e88d06ec1aa3e44ca2dd8d097d416f1b7dfe9d6e21340137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_578f30858f7bf06a7e79ffec4ac9c81f325a78a9b3bd31e2534030cd9b648496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_578f30858f7bf06a7e79ffec4ac9c81f325a78a9b3bd31e2534030cd9b648496->enter($__internal_578f30858f7bf06a7e79ffec4ac9c81f325a78a9b3bd31e2534030cd9b648496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </body>
</html>
";
        
        $__internal_00551999e3ae4c76e88d06ec1aa3e44ca2dd8d097d416f1b7dfe9d6e21340137->leave($__internal_00551999e3ae4c76e88d06ec1aa3e44ca2dd8d097d416f1b7dfe9d6e21340137_prof);

        
        $__internal_578f30858f7bf06a7e79ffec4ac9c81f325a78a9b3bd31e2534030cd9b648496->leave($__internal_578f30858f7bf06a7e79ffec4ac9c81f325a78a9b3bd31e2534030cd9b648496_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a10540a102dbbd8391d71ccbd01d77e33ea8b59c42340b7ac48ea62e24b9d8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a10540a102dbbd8391d71ccbd01d77e33ea8b59c42340b7ac48ea62e24b9d8f->enter($__internal_6a10540a102dbbd8391d71ccbd01d77e33ea8b59c42340b7ac48ea62e24b9d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fcd6ec307f7623c09fae1749bc8a3ddfcb32ca06c5569722adec9737e1a1764f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcd6ec307f7623c09fae1749bc8a3ddfcb32ca06c5569722adec9737e1a1764f->enter($__internal_fcd6ec307f7623c09fae1749bc8a3ddfcb32ca06c5569722adec9737e1a1764f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fcd6ec307f7623c09fae1749bc8a3ddfcb32ca06c5569722adec9737e1a1764f->leave($__internal_fcd6ec307f7623c09fae1749bc8a3ddfcb32ca06c5569722adec9737e1a1764f_prof);

        
        $__internal_6a10540a102dbbd8391d71ccbd01d77e33ea8b59c42340b7ac48ea62e24b9d8f->leave($__internal_6a10540a102dbbd8391d71ccbd01d77e33ea8b59c42340b7ac48ea62e24b9d8f_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_619ac8233564970471288524da8e9afde3fb26556c831ec5b8c6d87cb3731f16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_619ac8233564970471288524da8e9afde3fb26556c831ec5b8c6d87cb3731f16->enter($__internal_619ac8233564970471288524da8e9afde3fb26556c831ec5b8c6d87cb3731f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bb3d4e6547ee0ed55fefaa6c04335bcf707daaaff5c7d89710639d0d4798d051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3d4e6547ee0ed55fefaa6c04335bcf707daaaff5c7d89710639d0d4798d051->enter($__internal_bb3d4e6547ee0ed55fefaa6c04335bcf707daaaff5c7d89710639d0d4798d051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_bb3d4e6547ee0ed55fefaa6c04335bcf707daaaff5c7d89710639d0d4798d051->leave($__internal_bb3d4e6547ee0ed55fefaa6c04335bcf707daaaff5c7d89710639d0d4798d051_prof);

        
        $__internal_619ac8233564970471288524da8e9afde3fb26556c831ec5b8c6d87cb3731f16->leave($__internal_619ac8233564970471288524da8e9afde3fb26556c831ec5b8c6d87cb3731f16_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_0cf19d1813f1275c17ebc51f12f510761d8524dc54c22f08fd92271b25e77117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cf19d1813f1275c17ebc51f12f510761d8524dc54c22f08fd92271b25e77117->enter($__internal_0cf19d1813f1275c17ebc51f12f510761d8524dc54c22f08fd92271b25e77117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7f1fcc26b6ba93e8856f8f347bef340deae8494f255241487de468a6d032fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f1fcc26b6ba93e8856f8f347bef340deae8494f255241487de468a6d032fd3->enter($__internal_d7f1fcc26b6ba93e8856f8f347bef340deae8494f255241487de468a6d032fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d7f1fcc26b6ba93e8856f8f347bef340deae8494f255241487de468a6d032fd3->leave($__internal_d7f1fcc26b6ba93e8856f8f347bef340deae8494f255241487de468a6d032fd3_prof);

        
        $__internal_0cf19d1813f1275c17ebc51f12f510761d8524dc54c22f08fd92271b25e77117->leave($__internal_0cf19d1813f1275c17ebc51f12f510761d8524dc54c22f08fd92271b25e77117_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9cbec461a0e80a16408eb8617efb1b5ab6d6ee389c3d16911b632ac7c7dc1a04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cbec461a0e80a16408eb8617efb1b5ab6d6ee389c3d16911b632ac7c7dc1a04->enter($__internal_9cbec461a0e80a16408eb8617efb1b5ab6d6ee389c3d16911b632ac7c7dc1a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6d6cd8ffc492c78f45e6ce0cff6ccafcef577d49174aab5a09fa988360940bd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d6cd8ffc492c78f45e6ce0cff6ccafcef577d49174aab5a09fa988360940bd1->enter($__internal_6d6cd8ffc492c78f45e6ce0cff6ccafcef577d49174aab5a09fa988360940bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6d6cd8ffc492c78f45e6ce0cff6ccafcef577d49174aab5a09fa988360940bd1->leave($__internal_6d6cd8ffc492c78f45e6ce0cff6ccafcef577d49174aab5a09fa988360940bd1_prof);

        
        $__internal_9cbec461a0e80a16408eb8617efb1b5ab6d6ee389c3d16911b632ac7c7dc1a04->leave($__internal_9cbec461a0e80a16408eb8617efb1b5ab6d6ee389c3d16911b632ac7c7dc1a04_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 15,  108 => 14,  95 => 8,  86 => 7,  68 => 5,  56 => 16,  53 => 15,  51 => 14,  45 => 11,  42 => 10,  40 => 7,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>

        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\">
        {% endblock %}
        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/edvinas/demo_project/app/Resources/views/base.html.twig");
    }
}
