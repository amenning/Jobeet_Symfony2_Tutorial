<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_2a845527b954d4478965cea4ed98314fe3703d5d112f002cb93d9a309fb8ff31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_42bb160b0ccf4a34aeb00ca51d8c157ef0afc537b85bb53ecbc0f63ed132f2f7 = $this->env->getExtension("native_profiler");
        $__internal_42bb160b0ccf4a34aeb00ca51d8c157ef0afc537b85bb53ecbc0f63ed132f2f7->enter($__internal_42bb160b0ccf4a34aeb00ca51d8c157ef0afc537b85bb53ecbc0f63ed132f2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42bb160b0ccf4a34aeb00ca51d8c157ef0afc537b85bb53ecbc0f63ed132f2f7->leave($__internal_42bb160b0ccf4a34aeb00ca51d8c157ef0afc537b85bb53ecbc0f63ed132f2f7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d920a5e4ac4ac5a86b0d2f2dad28aa113654f650b2cc58271fe8addcd9444065 = $this->env->getExtension("native_profiler");
        $__internal_d920a5e4ac4ac5a86b0d2f2dad28aa113654f650b2cc58271fe8addcd9444065->enter($__internal_d920a5e4ac4ac5a86b0d2f2dad28aa113654f650b2cc58271fe8addcd9444065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d920a5e4ac4ac5a86b0d2f2dad28aa113654f650b2cc58271fe8addcd9444065->leave($__internal_d920a5e4ac4ac5a86b0d2f2dad28aa113654f650b2cc58271fe8addcd9444065_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2dab99d98409fa65a8966aa65a517c38de4aff3273ed9b5d9fe6c5c343dc5d2b = $this->env->getExtension("native_profiler");
        $__internal_2dab99d98409fa65a8966aa65a517c38de4aff3273ed9b5d9fe6c5c343dc5d2b->enter($__internal_2dab99d98409fa65a8966aa65a517c38de4aff3273ed9b5d9fe6c5c343dc5d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2dab99d98409fa65a8966aa65a517c38de4aff3273ed9b5d9fe6c5c343dc5d2b->leave($__internal_2dab99d98409fa65a8966aa65a517c38de4aff3273ed9b5d9fe6c5c343dc5d2b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_277407e878e1c54e06bc09f52ba69dc0ac3963f6b6f1318c8edab04df3e8fec5 = $this->env->getExtension("native_profiler");
        $__internal_277407e878e1c54e06bc09f52ba69dc0ac3963f6b6f1318c8edab04df3e8fec5->enter($__internal_277407e878e1c54e06bc09f52ba69dc0ac3963f6b6f1318c8edab04df3e8fec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_277407e878e1c54e06bc09f52ba69dc0ac3963f6b6f1318c8edab04df3e8fec5->leave($__internal_277407e878e1c54e06bc09f52ba69dc0ac3963f6b6f1318c8edab04df3e8fec5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
