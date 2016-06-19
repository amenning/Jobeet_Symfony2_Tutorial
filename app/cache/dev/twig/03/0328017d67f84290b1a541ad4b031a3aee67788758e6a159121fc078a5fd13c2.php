<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a02b83c9b654be91b570d298377660eaab753c7ca55a4962bb7be411c1c5fa4b extends Twig_Template
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
        $__internal_71d85be4039a836aecb0f27355c4dde758885be23fbeb562cbf2dac4a7cd8b85 = $this->env->getExtension("native_profiler");
        $__internal_71d85be4039a836aecb0f27355c4dde758885be23fbeb562cbf2dac4a7cd8b85->enter($__internal_71d85be4039a836aecb0f27355c4dde758885be23fbeb562cbf2dac4a7cd8b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71d85be4039a836aecb0f27355c4dde758885be23fbeb562cbf2dac4a7cd8b85->leave($__internal_71d85be4039a836aecb0f27355c4dde758885be23fbeb562cbf2dac4a7cd8b85_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_15f02cd5313ec78e3c60a5d789297cb8a39b33069e45f01630b0f8a1559dca9e = $this->env->getExtension("native_profiler");
        $__internal_15f02cd5313ec78e3c60a5d789297cb8a39b33069e45f01630b0f8a1559dca9e->enter($__internal_15f02cd5313ec78e3c60a5d789297cb8a39b33069e45f01630b0f8a1559dca9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_15f02cd5313ec78e3c60a5d789297cb8a39b33069e45f01630b0f8a1559dca9e->leave($__internal_15f02cd5313ec78e3c60a5d789297cb8a39b33069e45f01630b0f8a1559dca9e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_364b99905ce854e31ff79ebc263b7aee1917e4f25396144edb672b3145f48cbb = $this->env->getExtension("native_profiler");
        $__internal_364b99905ce854e31ff79ebc263b7aee1917e4f25396144edb672b3145f48cbb->enter($__internal_364b99905ce854e31ff79ebc263b7aee1917e4f25396144edb672b3145f48cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_364b99905ce854e31ff79ebc263b7aee1917e4f25396144edb672b3145f48cbb->leave($__internal_364b99905ce854e31ff79ebc263b7aee1917e4f25396144edb672b3145f48cbb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e557b13531622fe5de5c9e3cdbf9346092e8fff8dc29e2c4ec4e39e989d0f709 = $this->env->getExtension("native_profiler");
        $__internal_e557b13531622fe5de5c9e3cdbf9346092e8fff8dc29e2c4ec4e39e989d0f709->enter($__internal_e557b13531622fe5de5c9e3cdbf9346092e8fff8dc29e2c4ec4e39e989d0f709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e557b13531622fe5de5c9e3cdbf9346092e8fff8dc29e2c4ec4e39e989d0f709->leave($__internal_e557b13531622fe5de5c9e3cdbf9346092e8fff8dc29e2c4ec4e39e989d0f709_prof);

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
