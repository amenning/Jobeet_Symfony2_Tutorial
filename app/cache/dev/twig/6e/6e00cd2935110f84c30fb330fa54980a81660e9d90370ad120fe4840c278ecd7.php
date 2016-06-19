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
        $__internal_fb9c7d17966079eb0b18830e20075528880f47274ecc633ac81aba24ac0a5970 = $this->env->getExtension("native_profiler");
        $__internal_fb9c7d17966079eb0b18830e20075528880f47274ecc633ac81aba24ac0a5970->enter($__internal_fb9c7d17966079eb0b18830e20075528880f47274ecc633ac81aba24ac0a5970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb9c7d17966079eb0b18830e20075528880f47274ecc633ac81aba24ac0a5970->leave($__internal_fb9c7d17966079eb0b18830e20075528880f47274ecc633ac81aba24ac0a5970_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_304610617df4580eb2aafd4fd3cbb10fadbf9695a751334bfd80fea0caecd237 = $this->env->getExtension("native_profiler");
        $__internal_304610617df4580eb2aafd4fd3cbb10fadbf9695a751334bfd80fea0caecd237->enter($__internal_304610617df4580eb2aafd4fd3cbb10fadbf9695a751334bfd80fea0caecd237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_304610617df4580eb2aafd4fd3cbb10fadbf9695a751334bfd80fea0caecd237->leave($__internal_304610617df4580eb2aafd4fd3cbb10fadbf9695a751334bfd80fea0caecd237_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7d2822df7dad4c473a191c3774aaf80816be9e048da0a6686d108cc46de24866 = $this->env->getExtension("native_profiler");
        $__internal_7d2822df7dad4c473a191c3774aaf80816be9e048da0a6686d108cc46de24866->enter($__internal_7d2822df7dad4c473a191c3774aaf80816be9e048da0a6686d108cc46de24866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7d2822df7dad4c473a191c3774aaf80816be9e048da0a6686d108cc46de24866->leave($__internal_7d2822df7dad4c473a191c3774aaf80816be9e048da0a6686d108cc46de24866_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_63559740647ca0a2f30c4a3b6495dc677ea17941713aa1c1d89cb252a9053a4a = $this->env->getExtension("native_profiler");
        $__internal_63559740647ca0a2f30c4a3b6495dc677ea17941713aa1c1d89cb252a9053a4a->enter($__internal_63559740647ca0a2f30c4a3b6495dc677ea17941713aa1c1d89cb252a9053a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_63559740647ca0a2f30c4a3b6495dc677ea17941713aa1c1d89cb252a9053a4a->leave($__internal_63559740647ca0a2f30c4a3b6495dc677ea17941713aa1c1d89cb252a9053a4a_prof);

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
