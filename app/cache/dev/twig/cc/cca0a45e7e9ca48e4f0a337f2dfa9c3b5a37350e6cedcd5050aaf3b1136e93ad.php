<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_8c88ce57ce2fe6e2b214d8144848e7024ca5b7c864e5444e84c7d5b50378e2b7 extends Twig_Template
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
        $__internal_9ad708e11c39d310c9432b5b2e1fab4a5b28fdc3cea737eecf11f25a38078a62 = $this->env->getExtension("native_profiler");
        $__internal_9ad708e11c39d310c9432b5b2e1fab4a5b28fdc3cea737eecf11f25a38078a62->enter($__internal_9ad708e11c39d310c9432b5b2e1fab4a5b28fdc3cea737eecf11f25a38078a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_9ad708e11c39d310c9432b5b2e1fab4a5b28fdc3cea737eecf11f25a38078a62->leave($__internal_9ad708e11c39d310c9432b5b2e1fab4a5b28fdc3cea737eecf11f25a38078a62_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
