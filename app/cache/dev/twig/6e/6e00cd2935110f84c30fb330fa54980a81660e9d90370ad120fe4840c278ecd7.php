<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f732ade2649809760573f5532d49062052050ff62798e62cf83a8985a532e701 extends Twig_Template
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
        $__internal_816ae43467325c288f1b5fff8c08b5f2b988411ebfd7076ca32dba3ee8c959a9 = $this->env->getExtension("native_profiler");
        $__internal_816ae43467325c288f1b5fff8c08b5f2b988411ebfd7076ca32dba3ee8c959a9->enter($__internal_816ae43467325c288f1b5fff8c08b5f2b988411ebfd7076ca32dba3ee8c959a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_816ae43467325c288f1b5fff8c08b5f2b988411ebfd7076ca32dba3ee8c959a9->leave($__internal_816ae43467325c288f1b5fff8c08b5f2b988411ebfd7076ca32dba3ee8c959a9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7a4fd645fe2d3a8c91d55a685540c1c656dbffd76c81834c37944917ff684e04 = $this->env->getExtension("native_profiler");
        $__internal_7a4fd645fe2d3a8c91d55a685540c1c656dbffd76c81834c37944917ff684e04->enter($__internal_7a4fd645fe2d3a8c91d55a685540c1c656dbffd76c81834c37944917ff684e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7a4fd645fe2d3a8c91d55a685540c1c656dbffd76c81834c37944917ff684e04->leave($__internal_7a4fd645fe2d3a8c91d55a685540c1c656dbffd76c81834c37944917ff684e04_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_68e9f8631e914ab2018c105faad7a8a2eb1ad47bee1ef87388cab9f945891a72 = $this->env->getExtension("native_profiler");
        $__internal_68e9f8631e914ab2018c105faad7a8a2eb1ad47bee1ef87388cab9f945891a72->enter($__internal_68e9f8631e914ab2018c105faad7a8a2eb1ad47bee1ef87388cab9f945891a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_68e9f8631e914ab2018c105faad7a8a2eb1ad47bee1ef87388cab9f945891a72->leave($__internal_68e9f8631e914ab2018c105faad7a8a2eb1ad47bee1ef87388cab9f945891a72_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_049c8a16c08138e84c5450427cdb1bd1fcd4159479adae0db3f467423b5e0555 = $this->env->getExtension("native_profiler");
        $__internal_049c8a16c08138e84c5450427cdb1bd1fcd4159479adae0db3f467423b5e0555->enter($__internal_049c8a16c08138e84c5450427cdb1bd1fcd4159479adae0db3f467423b5e0555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_049c8a16c08138e84c5450427cdb1bd1fcd4159479adae0db3f467423b5e0555->leave($__internal_049c8a16c08138e84c5450427cdb1bd1fcd4159479adae0db3f467423b5e0555_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
