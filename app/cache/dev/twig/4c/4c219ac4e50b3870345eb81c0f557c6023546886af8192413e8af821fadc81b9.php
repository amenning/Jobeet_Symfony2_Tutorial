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
        $__internal_6cc01c0d09f05bc9fa0bacc6d7aae2442ca5d74248b9e6796dc380661ce7d614 = $this->env->getExtension("native_profiler");
        $__internal_6cc01c0d09f05bc9fa0bacc6d7aae2442ca5d74248b9e6796dc380661ce7d614->enter($__internal_6cc01c0d09f05bc9fa0bacc6d7aae2442ca5d74248b9e6796dc380661ce7d614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cc01c0d09f05bc9fa0bacc6d7aae2442ca5d74248b9e6796dc380661ce7d614->leave($__internal_6cc01c0d09f05bc9fa0bacc6d7aae2442ca5d74248b9e6796dc380661ce7d614_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9edad35e4a8e1a3a2a645a013fe0907ca49793a267f0da31890b5389ca0123f6 = $this->env->getExtension("native_profiler");
        $__internal_9edad35e4a8e1a3a2a645a013fe0907ca49793a267f0da31890b5389ca0123f6->enter($__internal_9edad35e4a8e1a3a2a645a013fe0907ca49793a267f0da31890b5389ca0123f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9edad35e4a8e1a3a2a645a013fe0907ca49793a267f0da31890b5389ca0123f6->leave($__internal_9edad35e4a8e1a3a2a645a013fe0907ca49793a267f0da31890b5389ca0123f6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_097c1f656258978f5bd06a9c45cb190599e89437d82519db64afecd93086453a = $this->env->getExtension("native_profiler");
        $__internal_097c1f656258978f5bd06a9c45cb190599e89437d82519db64afecd93086453a->enter($__internal_097c1f656258978f5bd06a9c45cb190599e89437d82519db64afecd93086453a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_097c1f656258978f5bd06a9c45cb190599e89437d82519db64afecd93086453a->leave($__internal_097c1f656258978f5bd06a9c45cb190599e89437d82519db64afecd93086453a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_84894f22b21a5783507f08d754d6479c20c622eac32b643bf152b50be3103420 = $this->env->getExtension("native_profiler");
        $__internal_84894f22b21a5783507f08d754d6479c20c622eac32b643bf152b50be3103420->enter($__internal_84894f22b21a5783507f08d754d6479c20c622eac32b643bf152b50be3103420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_84894f22b21a5783507f08d754d6479c20c622eac32b643bf152b50be3103420->leave($__internal_84894f22b21a5783507f08d754d6479c20c622eac32b643bf152b50be3103420_prof);

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
