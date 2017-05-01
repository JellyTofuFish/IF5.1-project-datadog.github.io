<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_649a726114e9ad95b89d7f5771391a85a90a385287e55e24920a7148e0454577 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70696aae325d3ae3dc2b1ec19c6234d5eb8929f93b434cf745fccc7c2e661f7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70696aae325d3ae3dc2b1ec19c6234d5eb8929f93b434cf745fccc7c2e661f7e->enter($__internal_70696aae325d3ae3dc2b1ec19c6234d5eb8929f93b434cf745fccc7c2e661f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_4dff8568faed6599ce41aedf8ddc93748a9cbd6d8006b032d0404c15f8097dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dff8568faed6599ce41aedf8ddc93748a9cbd6d8006b032d0404c15f8097dcb->enter($__internal_4dff8568faed6599ce41aedf8ddc93748a9cbd6d8006b032d0404c15f8097dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_70696aae325d3ae3dc2b1ec19c6234d5eb8929f93b434cf745fccc7c2e661f7e->leave($__internal_70696aae325d3ae3dc2b1ec19c6234d5eb8929f93b434cf745fccc7c2e661f7e_prof);

        
        $__internal_4dff8568faed6599ce41aedf8ddc93748a9cbd6d8006b032d0404c15f8097dcb->leave($__internal_4dff8568faed6599ce41aedf8ddc93748a9cbd6d8006b032d0404c15f8097dcb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/home/edvinas/demo_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
